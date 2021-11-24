<?php

namespace App\Http\Controllers\Backend;

use DB;
use File;
use App\Fit;
use App\Color;
use App\Style;
use Validator;
use App\Fabric;
use App\ColorImage;
use App\Models\Size;
use App\Models\Type;
use App\Models\Brand;
use App\SleeveLength;
use App\ImprintMethod;
use App\Models\Generic;
use App\Models\Product;
use App\ProductionTime;
use App\Models\Category;
use App\Models\ProductSize;
use App\Models\ProductType;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->get();
        return view('backend.product.index-product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::where('parent_id','!=', 0)->get();
        $data['brands'] = Brand::all();
        $data['colors'] = Color::all();
        $data['imprint_methods'] = ImprintMethod::all();
        $data['sleeve_lengths'] = SleeveLength::all();
        $data['sizes'] = Size::all();
        $data['fits'] = Fit::all();
        $data['styles'] = Style::all();
        $data['fabrics'] = Fabric::all();
        $data['production_times'] = ProductionTime::all();
        $data['sizes'] = Size::all();
        $data['types'] = Type::all();
        $data['generics'] = Generic::all();
        return view('backend.product.create-product', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|unique:products,product_name',
            'product_code' => 'required|unique:products,product_code',
            'category_id' => 'required'
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $product = new Product();

        $product->product_name            = $request->product_name;
        $product->slogan            = $request->slogan;
        $product->product_slug            = Str::slug($request->product_name);
        $product->category_id             = $request->category_id;
        $product->subcategory_id          = $request->subcategory_id;
        $product->brand_id                = $request->brand_id;
        $product->product_code            = $request->product_code;
        $product->product_quantity        = $request->product_quantity;
        $product->selling_price           = $request->selling_price;
        $product->sminprice           = $request->sminprice;
        $product->smaxprice           = $request->smaxprice;
        $product->discount                = $request->discount;
        $product->discount_price          = $request->discount_price;
        $product->product_description     = $request->product_description;
        $product->short_description     = $request->short_description;
        $product->minimum_quantity     = $request->minimum_quantity;
        $product->hot_deal                = $request->hot_deal;
        $product->trend_product           = $request->trend_product;
        $product->status                  = $request->status;

        // Default image
        // $defaultImage = $request->file('default_image');
        // if ($defaultImage) {
        //     $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
        //     $defaultImage->move(base_path('uploaded/product'), $imageName);
        //     $product->default_image = '/uploaded/product/' . $imageName;
        // }

        // // Sub image one
        // $subImageOne = $request->file('sub_image_one');
        // if ($subImageOne) {
        //     $imageName = time() . '_' . uniqid() . '.' . $subImageOne->getClientOriginalExtension();
        //     $subImageOne->move(base_path('uploaded/product'), $imageName);
        //     $product->sub_image_one = '/uploaded/product/' . $imageName;
        // }

        // // Sub image two
        // $subImageTwo = $request->file('sub_image_two');
        // if ($subImageTwo) {
        //     $imageName = time() . '_' . uniqid() . '.' . $subImageTwo->getClientOriginalExtension();
        //     $subImageTwo->move(base_path('uploaded/product'), $imageName);
        //     $product->sub_image_two = '/uploaded/product/' . $imageName;
        // }

        $product->save();

        //Types
        // $types = $request->type_id;
        // if (!empty($types)) {
        //     foreach ($types as $type) {
        //         $mytype = new ProductType();
        //         $mytype->product_id = $product->id;
        //         $mytype->type_id = $type;
        //         $mytype->save();
        //     }
        // }

        //Size
        $sizes = $request->size_id;
        if (!empty($sizes)) {
            foreach ($sizes as $size) {
                $mysize = new ProductSize();
                $mysize->product_id = $product->id;
                $mysize->size_id = $size;
                $mysize->save();
            }
        }
        
        //color
        $colors = $request->color_id;
        if (!empty($colors)) {
            foreach ($colors as $color) {
                $mycolor = new ProductColor();
                $mycolor->product_id = $product->id;
                $mycolor->color_id = $color;
                $mycolor->save();
            }
        }

        //////////////////////////////////////////////////details start
        if(!empty($request->size_id))
        {
            $count = count($request->size_id);
            for ($i=0; $i < $count; $i++) {
                $mysize = new ProductSize();
                $mysize->product_id = $product->id;
                $mysize->size_id = $request->size_id[$i];
                $mysize->quantity = $request->quantity[$i];
                $mysize->save();
            }
        }
        
        if(!empty($request->color_image))
        {
            $count = count($request->color_image);
            // dd($count);
            for ($i=0; $i < $count; $i++) {
              $ci = new ColorImage();
              $ci->product_id = $product->id;
              $colorImage = $request->color_image[$i];
              // Default image
              if ($colorImage) {
                $imageName = time() . '_' . uniqid() . '.' . $colorImage->getClientOriginalExtension();
                $colorImage->move(base_path('uploaded/product'), $imageName);
                $ci->color_image = '/uploaded/product/' . $imageName;  
              }
            $ci->save();
            }
        }
        //////////////////////////////////////////////////details ends

        $notification = array(
            'message' => 'Product created successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product'] = Product::find($id);
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['production_times'] = ProductionTime::all();
        $data['generics'] = Generic::all();
        $data['types'] = ProductType::where('product_id', $id)->get();
        $data['sizes'] = ProductSize::where('product_id', $id)->get();
        $data['colors'] = Color::all();
        $data['color_images'] = ColorImage::where('product_id', $id)->get();
        return view('backend.product.show-product', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        $data['categories'] = Category::where('parent_id','!=', null)->get();
        $data['subcategories'] = Subcategory::all();
        $data['brands'] = Brand::all();
        $data['colors'] = Color::all();
        $data['imprint_methods'] = ImprintMethod::all();
        $data['production_times'] = ProductionTime::all();
        $data['sleeve_lengths'] = SleeveLength::all();
        $data['sizes'] = Size::all();
        $data['fits'] = Fit::all();
        $data['styles'] = Style::all();
        $data['fabrics'] = Fabric::all();
        $data['types'] = Type::all();
        $data['color_images'] = ColorImage::where('product_id', $id)->get();
        $data['generics'] = Generic::all();
        $data['selectType'] = ProductType::select('type_id')->where('product_id', $id)->orderBy('id', 'asc')->get()->toArray();
        $data['selectSize'] = ProductSize::select('size_id')->where('product_id', $id)->orderBy('id', 'asc')->get()->toArray();
        $data['selectColor'] = ProductColor::select('color_id')->where('product_id', $id)->orderBy('id', 'asc')->get()->toArray();
        return view('backend.product.edit-product', $data);
    }
    public function images_edit($id)
    {
        $data['color_image'] = ColorImage::find($id);

        return view('backend.product.edit-images', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|unique:products,product_name,' . $id,
            'product_code' => 'required|unique:products,product_code,' .$id,
            'category_id' => 'required',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $product = Product::find($id);

        $product->product_name            = $request->product_name;
        $product->product_slug            = Str::slug($request->product_name);
        $product->category_id             = $request->category_id;
        $product->brand_id                = $request->brand_id;
        $product->product_code            = $request->product_code;
        $product->selling_price           = $request->selling_price;
        $product->sminprice           = $request->sminprice;
        $product->smaxprice           = $request->smaxprice;
        $product->discount                = $request->discount;
        $product->discount_price          = $request->discount_price;
        $product->product_description     = $request->product_description;
        $product->short_description     = $request->short_description;
        $product->hot_deal                = $request->hot_deal;
        $product->trend_product           = $request->trend_product;
        $product->status                  = $request->status;

        // Default image
        // $defaultImage = $request->file('default_image');
        // if ($defaultImage) {
        //     $image_path = base_path($product->default_image);
        //     @unlink($image_path);
        //     $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
        //     $defaultImage->move(base_path('uploaded/product'), $imageName);
        //     $product->default_image = '/uploaded/product/' . $imageName;
        // }

        $product->save();

        //Types
        // $types = $request->type_id;
        // if (!empty($types)) {
        //     $deltype = ProductType::where('product_id', $id);
        //     $deltype->delete();
        //     foreach ($types as $type) {
        //         $mytype = new ProductType();
        //         $mytype->product_id = $product->id;
        //         $mytype->type_id = $type;
        //         $mytype->save();
        //     }
        // }

        //Size
        $sizes = $request->size_id;
        if (!empty($sizes)) {
            $delsize = ProductSize::where('product_id', $id);
            $delsize->delete();
            foreach ($sizes as $size) {
                $mysize = new ProductSize();
                $mysize->product_id = $product->id;
                $mysize->size_id = $size;
                $mysize->save();
            }
        }
        
        //Coloe
        $colors = $request->color_id;
        if (!empty($colors)) {
            $delcolor = ProductColor::where('product_id', $id);
            $delcolor->delete();
            foreach ($colors as $color) {
                $mycolor = new ProductColor();
                $mycolor->product_id = $product->id;
                $mycolor->color_id = $color;
                $mycolor->save();
            }
        }

        //////////////////////////////////////////////////details start
        if(!empty($request->size_id))
        {   
            $delsize = ProductSize::where('product_id', $id);
            $delsize->delete();
            $count = count($request->size_id);
            for ($i=0; $i < $count; $i++) {
                $mysize = new ProductSize();
                $mysize->product_id = $id;
                $mysize->size_id = $request->size_id[$i];
                $mysize->quantity = $request->quantity[$i];
                $mysize->save();
            }
        }
        
        if(!empty($request->color_image))
        {   
            $photos = $request->file('color_image');
            foreach ($photos as $photo) {
                $filename = $photo->getClientOriginalName();
                $photo->move(base_path('uploaded/product'), $filename);

                $ProjectPhoto = new ColorImage;
                $ProjectPhoto->product_id = $product->id;
                $ProjectPhoto->color_image   = '/uploaded/product/' . $filename;
                $ProjectPhoto->save();
            }
        }
        //////////////////////////////////////////////////details ends

        $notification = array(
            'message' => 'Product updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function images_update(Request $request, $id)
    {   
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'color_image' => 'required'
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $product_image = ColorImage::find($id);

        // Default image
        $colorImage = $request->file('color_image');
        if ($colorImage) {
            $image_path = base_path($product_image->color_image);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $colorImage->getClientOriginalExtension();
            $colorImage->move(base_path('uploaded/product'), $imageName);
            $product_image->color_image = '/uploaded/product/' . $imageName;
        }

        $product_image->save();

        $notification = array(
            'message' => 'Image updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function cimageDelete($id)
    {   
        $ci = ColorImage::find($id);
        if(File::exists(base_path('uploaded/product'), $ci->color_image)){
            File::delete(base_path('uploaded/product'), $ci->color_image);
        }
        $ciis = ColorImage::destroy($id);
        if($ciis){
            return response()->json('success');
        }
    }
    public function destroy($id)
    {
        $product = Product::onlyTrashed()->find($id);

        $image_path1 = base_path($product->default_image);
        $image_path2 = base_path($product->sub_image_one);
        $image_path3 = base_path($product->sub_image_two);

        @unlink($image_path1);
        @unlink($image_path2);
        @unlink($image_path3);

        ProductType::where('product_id',$id)->delete();
        ProductGeneric::where('product_id',$id)->delete();
        ProductSize::where('product_id',$id)->delete();

        $product->forceDelete();

        $notification = array(
            'message' => 'Data deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function trash($id)
    {
        Product::find($id)->delete();
        $notification = array(
            'message' => 'Successfully move to trashed!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function trash_list()
    {
        $data['data'] = Product::onlyTrashed()->latest()->get();
        return view('backend.product.trash-list', $data);
    }

    public function restore($id)
    {
        Product::withTrashed()->find($id)->restore();
        $notification = array(
            'message' => 'Data restored successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function status(Request $request, $id)
    {
        $data = Product::find($id);
        $data->status = $request->status;
        $data->save();

        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
