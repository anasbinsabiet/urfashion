<?php

namespace App\Http\Controllers\Frontend;

use DB;
use Auth;
use App\Fit;
use App\User;
use App\Color;
use App\Style;
use Validator;
use App\Fabric;
use App\Gallery;
use App\ColorImage;
use App\Models\Blog;
use App\Models\Size;
use App\OfflineChat;
use App\ProductHelp;
use App\Models\Brand;
use App\SleeveLength;
use App\ImprintMethod;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Order;
use App\productionTime;
use App\ShippingMethod;
use App\Models\Category;
use App\Models\Division;
use App\PackagingOption;
use App\Models\Newslater;
use App\Models\Contactpage;
use App\Models\ProductSize;
use App\Models\ProductType;
use Redirect,Response,File;
use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $data['products'] = Product::latest()->paginate(8);
        $data['hot_deals'] = Product::where('hot_deal',1)->take(5)->get();
        $data['trendings'] = Product::where('trend_product',1)->take(5)->get();
        $data['categories'] = Product::select('category_id')->get();
        $data['childless_categories'] = Category::where('parent_id', 0)->take(15)->get();
        $data['brands'] = Product::select('brand_id')->get();
        $data['data'] = Setting::find(4);
        $data['galleries'] = Gallery::all()->take('4');
        $data['blogs'] = Blog::all()->take('2');
        return view('frontend.home', $data);
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function userLogin()
    {
        return view('frontend.login');
    }
    public function udashboard(Request $request)
    {
        return $request->input();
        // echo "udashboard";
    }
    public function userRegister()
    {
        return view('frontend.register');
    }
    public function changeImage(Request $request)
    {   
        $color_id = $request->color_id;
        $image = ColorImage::where('id', $color_id)->first();
        // $url  = url()->full();
        // $featured_image = $url + $image;
        return response()->json($image->color_image);
    }
    public function productDetails($product_slug, Request $request)
    {   
        if($request->update_cart == true){
            $current_product = Product::where('product_slug', $product_slug)->first();
            $data['product_image'] = ColorImage::where('product_id', $current_product->id)->orderBy('color_id')->take(1)->first();
            $data['product_images'] = ColorImage::where('product_id', $current_product->id)->get();
            // dd($data['product_images']);
            $data['brands'] = Brand::all();
            $data['product'] = Product::where('product_slug', $product_slug)->first();
            $data['packaging_options'] = PackagingOption::all();

            $data['populate'] = true;
        }
        $current_product = Product::where('product_slug', $product_slug)->first();
        $data['product_image'] = ColorImage::where('product_id', $current_product->id)->orderBy('color_id')->take(1)->first();
        $data['product_images'] = ColorImage::where('product_id', $current_product->id)->get();
        // dd($data['product_images']);
        $data['brands'] = Brand::all();
        $data['product'] = Product::where('product_slug', $product_slug)->first();
        $data['packaging_options'] = PackagingOption::all();
        
        return view('frontend.product-details', $data);
    }
    public function productDetailsSearch($id, Request $request)
    {   
        if($request->update_cart == true){
            $current_product = Product::where('id', $id)->first();
            $data['product_image'] = ColorImage::where('product_id', $current_product->id)->orderBy('color_id')->take(1)->first();
            $data['product_images'] = ColorImage::where('product_id', $current_product->id)->get();
            // dd($data['product_images']);
            $data['brands'] = Brand::all();
            $data['product'] = Product::where('id', $id)->first();
            $data['packaging_options'] = PackagingOption::all();

            $data['populate'] = true;
        }
        $current_product = Product::where('id', $id)->first();
        $data['product_image'] = ColorImage::where('product_id', $current_product->id)->orderBy('color_id')->take(1)->first();
        $data['product_images'] = ColorImage::where('product_id', $current_product->id)->get();
        // dd($data['product_images']);
        $data['brands'] = Brand::all();
        $data['product'] = Product::where('id', $id)->first();
        $data['packaging_options'] = PackagingOption::all();
        return view('frontend.product-details', $data);
    }
    public function userStore(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'mobile' => 'required|unique:users,mobile',
            'email' => 'email|unique:users,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        $data = new User;
        $data->role = 2;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->shop_name = $request->shop_name;
        $data->address = $request->address;
        $data->facebook_page_link = $request->facebook_page_link;
        $data->whatsapp_imo = $request->whatsapp_imo;
        $data->gender = $request->gender;
        $data->bkash = $request->bkash;
        $data->nagad = $request->nagad;
        $data->bank_account_name = $request->bank_account_name;
        $data->bank_account_number = $request->bank_account_number;
        $data->bank_name = $request->bank_name;
        $data->bank_branch_name = $request->bank_branch_name;
        $data->routing_number = $request->routing_number;
        $data->password = bcrypt($request->password);
        $data->save();

        Auth::login($data, true);
        return redirect()->route('myaccount')->with('message','Registration Successfull!');
    }
    
    public function userUpdate(Request $request)
    {   
        $user_id = $request->user_id;
        if(!empty($request->password) && !empty($request->password_confirmation)){
            $this->validate($request, [
                'address' => 'required',
                'mobile' => 'required',
                'email' => 'email',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6',
            ]);

            $data = User::find($user_id);
            // $data->role = 2;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->shop_name = $request->shop_name;
            $data->address = $request->address;
            $data->facebook_page_link = $request->facebook_page_link;
            $data->whatsapp_imo = $request->whatsapp_imo;
            $data->gender = $request->gender;
            $data->bkash = $request->bkash;
            $data->nagad = $request->nagad;
            $data->bank_account_name = $request->bank_account_name;
            $data->bank_account_number = $request->bank_account_number;
            $data->bank_name = $request->bank_name;
            $data->bank_branch_name = $request->bank_branch_name;
            $data->routing_number = $request->routing_number;
            $data->password = bcrypt($request->password);
            $data->save();

            return redirect()->route('myaccount')->with('message','Registration Successfull!');
        }else{
            $this->validate($request, [
                'address' => 'required',
                'mobile' => 'required',
                'email' => 'email',
            ]);

            $data = User::find($user_id);
            // $data->role = 2;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->shop_name = $request->shop_name;
            $data->address = $request->address;
            $data->facebook_page_link = $request->facebook_page_link;
            $data->whatsapp_imo = $request->whatsapp_imo;
            $data->gender = $request->gender;
            $data->bkash = $request->bkash;
            $data->nagad = $request->nagad;
            $data->bank_account_name = $request->bank_account_name;
            $data->bank_account_number = $request->bank_account_number;
            $data->bank_name = $request->bank_name;
            $data->bank_branch_name = $request->bank_branch_name;
            $data->routing_number = $request->routing_number;
            // $data->password = bcrypt($request->password);
            $data->save();
            return redirect()->route('myaccount')->with('message','Profile Updated!');
            // return response()->json('ase');
        }
    }
    
    public function userValidate(Request $request)
    {
        $this->validate($request, [
            'phoneNo' => 'required|unique:users,mobile',
        ]);
        return response()->json('success');
    }

    public function newslaterStore(Request $request)
    {
        $data = new Newslater;
        $data->email = $request->email;
        $data->user_id = $request->user_id;
        $data->save();

        return response()->json('success');
    }

    public function customers()
    {
        return view('frontend.customers');
    }
    
    public function prescription_upload()
    {
        return view('frontend.prescription_upload');
    }

    public function prescription_store(Request $request)
    {   
        request()->validate([
         'name'  => 'required',
         'mobile'  => 'required',
         'file'  => 'required|mimes:jpg,png,gif,doc,docx,pdf,txt|max:2048',
       ]);
  
        if ($files = $request->file('file')) { 
            //store your file into database
            $prescription = new Prescription();
            $prescription->name = $request->name;
            $prescription->mobile = $request->mobile;
            $prescription->email = $request->email;
            $prescription->says = $request->says;

            $defaultImage = $request->file('file');
            if ($defaultImage) {
                $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
                $defaultImage->move(base_path('uploaded/product'), $imageName);
                $prescription->file = '/uploaded/product/' . $imageName;
            }

            $prescription->save();
              
            return response()->json(['success' => 'Prescription uploaded successfully.']);
  
        }
  
        return Response()->json([
                "success" => false,
                "file" => ''
          ]);
    }

    public function contact_store(Request $request)
    {   
        request()->validate([
         'name'  => 'required',
         'mobile'  => 'required',
       ]);
  
        if ($request->mobile) { 
            //store your file into database
            $contactpage = new Contactpage();
            $contactpage->name = $request->name;
            $contactpage->mobile = $request->mobile;
            $contactpage->email = $request->email;
            $contactpage->subject = $request->subject;
            $contactpage->message = $request->message;
            $contactpage->save();
            return response()->json(['success' => 'Message sent successfully.']);
        }
    }

    public function help_store(Request $request)
    {   
        request()->validate([
         'mobile'  => 'required'
       ]);
  
        if ($request->mobile) { 
            //store your file into database
            $producthelp = new ProductHelp();
            $producthelp->product_id = $request->product_id;
            $producthelp->mobile = $request->mobile;
            $producthelp->email = $request->email;
            $producthelp->questions = $request->questions;
            $producthelp->save();
            return response()->json('success');
        }
    }
    public function address_store(Request $request)
    {   

        // return response()->json($request->quantity_total); 
        request()->validate([
         'user_id'  => 'required',
         'customer_name'  => 'required',
         'mobile'  => 'required'
       ]);
    $district = $request->district;
    $quantity_total = $request->quantity_total;
    // $quantity_total = '4';
    if($district == 'Dhaka'){
        $sm = ShippingMethod::where('district_name', 'Dhaka')
        ->where('quantity_from', '<=', $quantity_total)
        ->where('quantity_to', '>=', $quantity_total)->get();
        $delivery_charge = $sm[0]->delivery_charge;
    }else{
        $sm1 = ShippingMethod::where('district_name', 'Out_of_Dhaka')
        ->where('quantity_from', '<', $quantity_total)
        ->where('quantity_to', '>', $quantity_total)->get();
        $delivery_charge = $sm1[0]->delivery_charge;
    }
    // return response()->json($delivery_charge);
  
        if ($request->mobile) { 
            $data = User::find($request->user_id);
            $data->name = $request->customer_name;
            $data->city = $request->city;
            $data->district = $request->district;
            $data->mobile = $request->mobile;
            $data->address = $request->address;
            $data->preferred_courier = $request->preferred_courier;
            $data->shipping_charge = $delivery_charge;
            $data->order_note = $request->order_note;
            $data->save();
            $message = array('message' => 'Success!', 'title' => 'Updated');
            return response()->json($message);
        }
    }
    
    public function new_address_store(Request $request)
    {   
        // return response()->json($request->all()); 
        request()->validate([
         'user_id'  => 'required',
         'customer_name'  => 'required',
         'mobile'  => 'required'
       ]);

       $district = $request->district;
        $quantity_total = $request->quantity_total;
        if($district == 'Dhaka'){
            $sm = ShippingMethod::where('district_name', 'Dhaka')
            ->where('quantity_from', '<', $quantity_total)
            ->where('quantity_to', '>', $quantity_total)->get();
            $delivery_charge = $sm[0]->delivery_charge;
        }else{
            $sm1 = ShippingMethod::where('district_name', 'Out_of_Dhaka')
            ->where('quantity_from', '<=', $quantity_total)
            ->where('quantity_to', '>=', $quantity_total)->get();
            $delivery_charge = $sm1[0]->delivery_charge;
        }
  
        if ($request->mobile) { 
            $data = User::find($request->user_id);
            $data->name = $request->customer_name;
            $data->city = $request->division;
            $data->district = $request->district;
            $data->mobile = $request->mobile;
            $data->address = $request->address;
            $data->preferred_courier = $request->preferred_courier;
            $data->shipping_charge = $delivery_charge;
            $data->order_note = $request->order_note;
            $data->save();
            $message = array('message' => 'Success!', 'title' => 'Updated');
            return response()->json($message);
        }
    }
    public function chat_store(Request $request)
    {   
        request()->validate([
         'mobile'  => 'required'
       ]);
  
        if ($request->mobile) { 
            //store your file into database
            $offlinechat = new OfflineChat();
            $offlinechat->name = $request->name;
            $offlinechat->mobile = $request->mobile;
            $offlinechat->email = $request->email;
            $offlinechat->questions = $request->questions;
            $offlinechat->save();
            return response()->json('success');
        }
    }

    public function order_confirmed()
    {
        return view('frontend.order_confirmed');
    }
    
    public function order_check(Request $request)
    {
        $order_id = $request->order_id;
        if (Auth::check()) {
            $check = Order::where('user_id', Auth::user()->id)->where('id', $order_id)->first();
            if ($check) {
                return response()->json('success');
            } else {
                return response()->json('failed');
            }
        } else {
            return response()->json('guest');
        }
    }
    
    public function product_inquiry()
    {
        return view('frontend.request_product');
    }

    public function refill_request()
    {
        return view('frontend.refill_request');
    }

    public function how_to_order()
    {
        return view('frontend.how_to_order');
    }

    public function about_us()
    {
        return view('frontend.about_us');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }

    public function policy()
    {
        return view('frontend.policy');
    }
    
    public function categories()
    {
        return view('frontend.categories');
    }

    public function offer($slug, Request $request)
    {   
        $category_id = Category::where('slug', $slug)->value('id');
        $subcategory_ids = Category::where('parent_id', $category_id)->pluck('id')->toArray();;
        $tsubcategory_ids = Category::whereIn('parent_id', $subcategory_ids)->pluck('id')->toArray();;
        $scatids = array_merge($subcategory_ids,$tsubcategory_ids);

        $data['products'] = DB::table('products')->whereIn('category_id', $scatids)->paginate(20);

        return view('frontend.offer', $data);
    }

    public function category($slug, Request $request)
    {   
        $data['production_time'] = ProductionTime::all();
        $data['imprint_method'] = ImprintMethod::all();
        $data['sleeve_length'] = SleeveLength::all();
        $data['brand'] = Brand::all();
        $data['color'] = Color::all();
        $data['fabric'] = Fabric::all();
        $data['fit'] = Fit::all();
        $data['style'] = Style::all();
        $data['size'] = Size::all();

        $category_id = Category::where('slug', $slug)->value('id');
        // dd($category_id);
        $subcategory_ids = Category::where('parent_id', $category_id)->pluck('id')->toArray();;
        $tsubcategory_ids = Category::whereIn('parent_id', $subcategory_ids)->pluck('id')->toArray();;
        $scatids = array_merge($subcategory_ids,$tsubcategory_ids);

        $data['current_cat'] = Category::where('slug', $slug)->first();
        $current_cat = Category::where('slug', $slug)->first();
        // dd($current_cat->category_name);
        if(!empty($current_cat->parent_id)){
            $data['parent_cat'] = Category::where('id', $current_cat->parent_id)->get();
        }        
        $cc = Category::where('slug', $slug)->value('parent_id');
        $data['cc_name'] = Category::where('id', $cc)->first();
        $data['categories'] = Category::all()->sortBy("category_name");
        $data['main_cat'] = Category::where('parent_id','=', null)->get();
        $data['categories_with_parents'] = Category::where('parent_id', $category_id)->get();

        $sort="";
        if($request->get('sort')!==null){
            $sort=$request->get('sort');
        }
        
        $min=0;
        if($request->get('min')!==null){
            $min=$request->get('min');
            $data['min'] = $min;
        }
        
        $max=0;
        if($request->get('max')!==null){
            $max=$request->get('max');
            $data['max'] = $max;
        }

        $products = DB::table('products');

        if(!empty($current_cat->parent_id)){
            $acategory_id = Category::where('slug', $slug)->pluck('id')->toArray();
            // dd($acategory_id);
            $second_catids = array_merge($acategory_id,$subcategory_ids);
            
            $products=$products->whereIn('category_id', $second_catids);
        }else{
            $products=$products->whereIn('category_id', $scatids);
        }

        if ($request->min > 0) {
            $products=$products->where('selling_price','>', $min);
        }
        
        if ($request->max > 0) {
            $products=$products->where('selling_price','<', $max);
        }
        
        if ($request->brand) {
            $products=$products->where('brand_id', $request->brand);
        }

        if($sort=='newest'){
            $products=$products->orderBy('created_at','asc');
        }elseif($sort=='oldest'){
            $products=$products->orderBy('created_at','desc');
        }elseif($sort=='name'){
            $products=$products->orderBy('product_name','asc');
        }elseif($sort=='price-desc'){
            $products=$products->orderBy('selling_price','desc');
        }elseif($sort=='price-asc'){
            $products=$products->orderBy('selling_price','asc');
        }

        $products=$products->paginate(8);
        // dd($products);
        $data['products'] = $products;
        return view('frontend.category', $data);
    }
    
    public function subcategory($slug, Request $request)
    {   
        $data['production_time'] = ProductionTime::all();
        $data['imprint_method'] = ImprintMethod::all();
        $data['sleeve_length'] = SleeveLength::all();
        $data['brand'] = Brand::all();
        $data['color'] = Color::all();
        $data['fabric'] = Fabric::all();
        $data['fit'] = Fit::all();
        $data['style'] = Style::all();
        $data['size'] = Size::all();

        $category_id = Category::where('slug', $slug)->value('id');
        $subcategory_ids = Category::where('parent_id', $category_id)->pluck('id');
        $data['current_cat'] = Category::where('slug', $slug)->first();
        $current_cat = Category::where('slug', $slug)->first();
        $cc = Category::where('slug', $slug)->value('parent_id');
        $data['cc_name'] = Category::where('id', $cc)->first();
        $data['categories'] = Category::all()->sortBy("category_name");
        $data['categories_with_parents'] = Category::where('parent_id', $category_id)->get();

        $sort="";
        if($request->get('sort')!==null){
            $sort=$request->get('sort');
        }
        
        $min=0;
        if($request->get('min')!==null){
            $min=$request->get('min');
            $data['min'] = $min;
        }
        
        $max=0;
        if($request->get('max')!==null){
            $max=$request->get('max');
            $data['max'] = $max;
        }

        $products = DB::table('products');
        $products=$products->where('category_id', $category_id);

        if ($request->min > 0) {
            $products=$products->where('selling_price','>', $min);
        }
        
        if ($request->max > 0) {
            $products=$products->where('selling_price','<', $max);
        }
        
        if ($request->brand) {
            $products=$products->where('brand_id', $request->brand);
        }

        if($sort=='newest'){
            $products=$products->orderBy('created_at','asc');
        }elseif($sort=='oldest'){
            $products=$products->orderBy('created_at','desc');
        }elseif($sort=='name'){
            $products=$products->orderBy('product_name','asc');
        }elseif($sort=='price-desc'){
            $products=$products->orderBy('selling_price','desc');
        }elseif($sort=='price-asc'){
            $products=$products->orderBy('selling_price','asc');
        }

        $products=$products->paginate(8);
        // dd($products);
        $data['products'] = $products;
        return view('frontend.subcategory', $data);
    }
    
    public function products(Request $request)
    {   
        $data['production_time'] = ProductionTime::all();
        $data['imprint_method'] = ImprintMethod::all();
        $data['sleeve_length'] = SleeveLength::all();
        $data['brand'] = Brand::all();
        $data['color'] = Color::all();
        $data['fabric'] = Fabric::all();
        $data['fit'] = Fit::all();
        $data['style'] = Style::all();
        $data['size'] = Size::all();

        $data['categories'] = Category::all()->sortBy("category_name");

        if ($request->q) {
            $data['keyword'] = $request->q;
            $data['products'] = Product::where('product_name','LIKE','%'.$request->q.'%')->where('status','1')->paginate(8);
        }else{
            $data['products'] = DB::table('products')->paginate(8);
        }

        return view('frontend.category', $data);
    }

    public function category_slug($category_slug)
    {   
        $parent_id = Category::where('slug', $category_slug)
                            ->where('parent_id', 0)
                            ->get();
        $data['categories'] = Category::where('parent_id', $parent_id[0]->id)->get();
        $tcategories = Category::where('parent_id', $parent_id[0]->id)->pluck('id')->toArray();
        $data['featured_products'] = Product::where('trend_product',1)->whereIn('category_id', $tcategories)->take(3)->get();
        $data['category_name'] = $parent_id[0]->category_name;
        return view('frontend.category_page', $data);
    }

    // public function product(Request $request)
    // {   
    //     $data['production_time'] = ProductionTime::all();
    //     $data['imprint_method'] = ImprintMethod::all();
    //     $data['sleeve_length'] = SleeveLength::all();
    //     $data['brand'] = Brand::all();
    //     $data['color'] = Color::all();
    //     $data['fabric'] = Fabric::all();
    //     $data['fit'] = Fit::all();
    //     $data['style'] = Style::all();
    //     $data['size'] = Size::all();
    //     $data['categories'] = Category::all()->sortBy("category_name");
    //     if($request->keyword){
    //         $keyword = $request->keyword;
    //         // dd($keyword);
    //         // $data['products'] = Product::whereLike('product_name', $keyword)->get();
    //         $builder = Product::query();
    //         $builder->where('product_name', 'LIKE', "%$keyword%");
    //         $data['products'] = $builder->orderBy('id')->paginate(8);
    //     }elseif($request->sort_by == 'newest'){
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('created_at','asc')
    //         ->paginate(8);
    //     }elseif($request->sort_by == 'best_selling'){
    //         $data['products'] = Product::where('trend_product',1)
    //         ->orderBy('id', 'asc')
    //         ->where('status','1')
    //         ->paginate(8);
    //     }elseif($request->sort_by == 'minimum_quantity'){
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('minimum_quantity','asc')
    //         ->paginate(8);
    //     }elseif($request->sort_by == 'production_time'){
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('production_time','asc')
    //         ->paginate(8);
    //     }elseif($request->sort_by == 'product_name'){
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('product_name','asc')
    //         ->paginate(8);
    //     }elseif($request->price_filter == '1'){
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('selling_price','asc')
    //         ->paginate(8);
    //     }elseif($request->price_filter == '2'){
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('selling_price','desc')
    //         ->paginate(8);
    //     }elseif($request->production_time){
    //         $production_time = $request->production_time; //production_time
    //         $data['products'] = DB::table('products')->whereIN('production_time', explode( ',', $production_time ))->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->color){
    //         $color = $request->color; //color
    //         $data['products'] = DB::table('products')->whereIN('color_id', explode( ',', $color ))->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->on_sale){
    //         $on_sale = $request->on_sale; //color
    //         $data['products'] = Product::where('trend_product', $on_sale)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->hot_deal){
    //         $hot_deal = $request->hot_deal; //color
    //         $data['products'] = Product::where('hot_deal', $hot_deal)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->imprint_method){
    //         $imprint_method = $request->imprint_method; //color
    //         $data['products'] = Product::where('imprint_method', $imprint_method)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->brand){
    //         $brand = $request->brand; //color
    //         $data['products'] = Product::where('brand_id', $brand)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->fit){
    //         $fit = $request->fit; //color
    //         $data['products'] = Product::where('fit_id', $fit)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->pstyle){
    //         $pstyle = $request->pstyle ; //color
    //         $data['products'] = Product::where('style_id', $pstyle)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->fabric){
    //         $fabric = $request->fabric; //color
    //         $data['products'] = Product::where('fabric_id', $fabric)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->sleeve_length){
    //         $sleeve_length = $request->sleeve_length; //color
    //         $data['products'] = Product::where('sleeve_length', $sleeve_length)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->size){
    //         $size = $request->size; //color
    //         $product_ids =DB::table('product_sizes')->where('size_id', $size)->pluck('product_id')->toArray();
    //         $data['products'] = Product::whereIn('id', $product_ids)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }elseif($request->sleeve_length){
    //         $sleeve_length = $request->sleeve_length; //color
    //         $data['products'] = Product::where('sleeve_length', $sleeve_length)->paginate(8);
    //         response()->json($data); //return to ajax
    //     }else{
    //         $data['products'] = Product::where('status', 1)
    //         ->orderBy('product_name','asc')
    //         ->paginate(8);
    //     }
        
    //     return view('frontend.category', $data);
    // }

    public function SearchautoComplete(Request $request)
    {
        $query = $request->get('term','');
        $products = Product::where('product_name','LIKE','%'.$query.'%')->where('status','1')->get();

        $data = [];
        foreach ($products as $items) {
            $data[] = [
                'value' => $items->product_name,
                'id' => $items->id
            ];
        }
        if(count($data))
        {
            return $data;
        }
        else
        {
            return ['value'=>'No Result Found','id'=>''];
        }
    }

    public function result(Request $request)
    {
        $searchingdata = $request->input('search_product');
        $products = Product::where('product_name','LIKE','%'.$searchingdata.'%')->where('status','1')->first();

        if ($products)
        {   
            return redirect('product/details/'.$products->id);
        }
        else
        {
            return redirect('/')-with('status','Product Not Available');
        }
    }

    public function gallery()
    {   
        $data['galleries'] = Gallery::all();
        return view('frontend.gallery', $data);
    }

}
