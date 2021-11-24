<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Cart;
use App\User;
use Validator;
use App\CardType;
use App\ColorImage;
use App\Models\Order;
use App\PaymentMethod;
use App\Models\Product;
use App\Models\Setting;
use App\ShippingMethod;
use App\Models\Division;
use App\Models\Wishlist;
use App\Models\OrderDetail;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\ImprintArtworkOption;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cartData(Request $request)
    {   
        // $data = $request->all();
    }

    public function index()
    {
        return view('frontend.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $data = $request->all();
        // return response()->json($data);
        $id = $request->product_id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        $product_image = ColorImage::where('product_id', $product->id)->orderBy('color_id')->take(1)->first();
  
        $cart[$id] = [
            "product_id" => $request->product_id,
            "product_name" => $product->product_name,
            "slug" => $product->product_slug,
            "product_image" => $product_image->color_image,
            "selling_price" => $request->selling_price,
            "product_price" => $request->product_price,
            "size" => $request->size,
            "qty" => $request->qty,
            "user_id" => $request->user_id,
        ];

        session()->put('cart', $cart);
        return response()->json("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update_cart(Cart $cart, $product_slug, $update_cart)
    {
        return response()->json("on_CONTROLLER");
    }

    public function billing_store(Request $request)
    {
        $validatedData = $request->validate([
            'mobile' => 'required',
        ]);
        $id = Auth::user()->id;
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->mobile = $request->mobile;

        $data->save();
        
        return response()->json("success");
    }

    public function shipping_store(Request $request)
    {
        $validatedData = $request->validate([
            'mobile' => 'required',
        ]);
        $id = Auth::user()->id;
        $data = User::findOrFail($id);
        $data->shipping_name = $request->name;
        $data->shipping_address = $request->address;
        $data->shipping_email = $request->shipping_email;
        $data->shipping_mobile = $request->mobile;

        $data->save();
        
        return response()->json("success");
    }

    public function order_store(Request $request)
    {   
        $order_total = 0;
        $quantity_total = 0;
        $order_total_selling = 0;
        if(!empty(session('cart')))
        {
            foreach(session('cart') as $id => $details)
            {  
                $order_total += $details['product_price'] * $details['qty'];
                $quantity_total += $details['qty'];
                $order_total_selling += $details['selling_price'] * $details['qty'];
            }
        }
        // return response()->json($request->all());
        if(!empty(Auth::user()->id))
        {
            $order = new Order();
            $user_id = Auth::user()->id;
            $users = User::find($user_id);
            $order->user_id = $user_id;
            $order->name = $users->name;
            $order->mobile = $users->mobile;
            $order->email = $users->email;
            $order->address = $users->address;
            $order->district = $users->district;
            $order->division = $users->division;

            $order->peferred_courier = $users->peferred_courier;
            $order->shipping_charge = $users->shipping_charge;
            $order->order_note = $users->order_note;
            $order->delivery_charge_status = $request->delivery_charge;
            $order->order_charge_status = $request->order_charge;
            $order->paid_amount = $request->paid_amount;
            $order->order_total = $order_total;
            $order->quantity_total = $quantity_total;
            $order->order_total_selling = $order_total_selling;
            $order->status = 0;

            $order->save();
            $order_id = $order->id;
            Session::forget('order_id');
            $request->session()->put('order_id',$order_id);

            $grand_total = 0;
            $selling_total = 0;
            if(!empty(session('cart')))
            {
                foreach(session('cart') as $id => $details)
                {   
                    $product = Product::findOrFail($id);
                    if($product->discount_price)
                    {
                        $price = $product->discount_price;
                    }else
                    {
                        $price = $product->selling_price;
                    }
                    
                    $grand_total += $details['qty'] * $price;
                    
                    $orderDetails = new OrderDetail();
                    $orderDetails->order_id = $order_id;
                    $orderDetails->product_id = $id;
                    $orderDetails->quantity = $details['qty'];
                    $orderDetails->size = $details['size'];
                    $orderDetails->selling_price = $details['selling_price'];
                    $orderDetails->grand_total = $grand_total;
                    $orderDetails->save();
                }
                Session::forget('cart');
                return response()->json('success');
            }
        }        
    }

    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function orderconfirm()
    {   
        if(!empty(session('order_id')))
        {
            $order_id = session('order_id');
            $data['orders'] = Order::where('id', $order_id)->get();
        }
        else
        {
            $data['orders'] = null;
        }

        if(!empty(Auth::user()->id))
        {
            $id = Auth::user()->id;
        }
        else
        {
            $id = null;
        }

        $data['user'] = User::where('id', $id)->first();

        $data['data'] = Setting::find(4);
        
        return view('frontend.order_confirmed', $data);
    }

    public function imprintoption($order_id, $product_id)
    {
        $data['order_id'] = $order_id;
        $data['product_id'] = $product_id;
        return view('frontend.imprintoption', $data);
    }
    
    public function imprintoption_store(Request $request)
    {   
        if($request->user_id)
        {
            $request->validate([
            'default_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $iao = new ImprintArtworkOption;
            $iao->user_id = $request->user_id;
            $iao->product_id = $request->product_id;
            $iao->order_id = $request->order_id;
            $iao->imprint_artwork_option = $request->imprint_artwork_option;
            $iao->imprintline1 = $request->imprintline1;
            $iao->imprintline2 = $request->imprintline2;
            $iao->imprintline3 = $request->imprintline3;
            $iao->imprintline4 = $request->imprintline4;
            $iao->imprint_comment = $request->imprint_comment;

            $image = $request->file('default_image');
            if ($image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(base_path('uploaded/artwork'), $imageName);
                $iao->default_image = '/uploaded/artwork/' . $imageName;
            }

            $iao->save();

            return back()->with('message', 'Successfully Uploaded!');
        }
        else
        {
            return back()->with('message', 'Login to Continue!');
        }

        // return response()->json($request->all());
        // if(!empty($request->user_id))
        // {
        //     $iao = new ImprintArtworkOption();
        //     $iao->user_id = $request->user_id;
        //     $iao->product_id = $request->product_id;
        //     $iao->order_id = $request->order_id;
        //     $iao->imprint_artwork_option = $request->imprint_artwork_option;
        //     $iao->imprintline1 = $request->imprintline1;
        //     $iao->imprintline2 = $request->imprintline2;
        //     $iao->imprintline3 = $request->imprintline3;
        //     $iao->imprintline4 = $request->imprintline4;
        //     $iao->imprint_comment = $request->imprint_comment;  

        //     $image = $request->file('default_image');
        //     if ($image) {
        //         $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        //         $image->move(base_path('uploaded/artwork'), $imageName);
        //         $iao->default_image = '/uploaded/artwork/' . $imageName;
        //     }

        //     $iao->save();
        //     return response()->json('success');
        // } 
    }

    public function myaccount()
    {   
        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
            $data['user'] = User::where('id', $user_id)->get();
            // $orders = Order::where('user_id', $user_id)->get();
        }
        else
        {
            $orders = null;
        }
        return view('frontend.myaccount', $data);
    }

    public function orderstatus()
    {   
        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
            $orders = Order::where('user_id', $user_id)->get();
        }
        else
        {
            $orders = null;
        }
        
        return view('frontend.orderstatus', compact('orders'));
    }
   
    public function ntstatusChange(Request $request)
    {
        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
            $nt_id = $request->nt_id;

            $nt = Notification::find($nt_id);
            $nt->status = 1;
            $nt->save();

            return response()->json('success');
        }
    } 


    public function orderdetail($id)
    {   
        $data['orders'] = Order::where('id', $id)->get();
        $data['order_id'] = $id;
        $data['orderdetails'] = OrderDetail::where('order_id', $id)->get();
        return view('frontend.orderdetail', $data);
    }

    public function artwork()
    {
        return view('frontend.artwork');
    }

    public function wishlist()
    {   
        if(!empty(Auth::user()->id)){
            $data['wishlist'] = Wishlist::where('user_id', 1)->first();
        }
        return view('frontend.wishlist', $data);
    }

    public function wishlist_store(Request $request)
    {
        $eproducts = Wishlist::where('user_id', $request->user_id)->where('product_id', $request->product_id)->get();
        if(count($eproducts) > 0){
            return response()->json("exists");
        }else{
            $user_id = $request->user_id;
            $product_id = $request->product_id;
            $wishlist = new Wishlist();
            $wishlist->user_id = $user_id;
            $wishlist->product_id = $product_id;
            $wishlist->save();
            return response()->json("success");
        }
    }

    public function wishlist_delete(Request $request)
    {
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $wdelete = DB::table('wishlists')->where('user_id',$user_id)->where('product_id',$product_id)->delete();
        if($wdelete){
            return response()->json('success');
        }
    }

    public function viewartwork()
    {
        return view('frontend.viewartwork');
    }

    public function address()
    {   
        if(!empty(Auth::user()->id))
        {
            $id = Auth::user()->id;
        }
        else
        {
            $id = null;
        }

        $data['user'] = User::where('id', $id)->first();
        return view('frontend.address', $data);
    }

    public function logininfo()
    {   
        if(!empty(Auth::user()->id))
        {
            $id = Auth::user()->id;
        }
        else
        {
            $id = null;
        }

        $data['user'] = User::where('id', $id)->first();
        return view('frontend.logininfo', $data);
    }

    public function help()
    {
        return view('frontend.help');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function contactinfo()
    {   
        $data['setting'] = Setting::find(4);
        return view('frontend.contactinfo', $data);
    }

    public function browsingHistory()
    {
        return view('frontend.browsingHistory');
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {   
        if(!empty(Auth::user()->id))
        {
            $id = Auth::user()->id;
        }
        else
        {
            $id = null;
        }

        
        $data['divisions'] = Division::all();
        $data['shippingmethod'] = ShippingMethod::all();
        $data['paymentmethod'] = PaymentMethod::all();
        $data['cardtype'] = CardType::all();
        $data['user'] = User::where('id', $id)->first();
        return view('frontend.checkout', $data);
    }
    public function destroy(Cart $cart)
    {
        //
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return response()->json("success");
        }
    }
}
