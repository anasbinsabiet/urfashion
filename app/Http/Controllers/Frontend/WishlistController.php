<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\Size;
use App\Models\Order;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function store($id)
    {

        if (Auth::check()) {
            $check = Wishlist::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
            if ($check) {
                return response()->json(['error' => 'Product allready has on your wishlist!']);
            } else {
                $data = new Wishlist();
                $data->user_id = Auth::user()->id;
                $data->product_id = $id;
                $data->save();
                return response()->json(['success' => 'Successfully Added To Wishlist']);
            }
        } else {
            return response()->json(['error' => 'At first login your account!']);
        }
    }

    public function wishlistCount(){
        $data = Wishlist::where('user_id', Auth::user()->id)->count();
        return response()->json($data);
        
    }

    //////////////////////add to cart
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                "name" => $product->product_name,
                "qty" => 1,
                "price" => $product->selling_price,
                "image" => $product->default_image
            ];
        }
          
        session()->put('cart', $cart);
        return response()->json(['success' => 'Successfully Added To Cart']);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {   
        // return response()->json($request->all());
        $product = Product::findOrFail($request->id);
          
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['success' => 'Successfully Updated Cart']);
        }
    }

    public function cartData()
    {
        $data = session()->get('cart');
        return response()->json($data);
    }

    public function orderEmail()
    {
        return view('emails.order');
    }

    public function cartCount(){
        $data = count((array) session('cart'));
        return response()->json($data);
    }
    
    public function ntCount(){
        $user_id = Auth::user()->id;
        $data = Notification::where('user_id',$user_id)->count();
        return response()->json($data);
    }
    
    public function populateAvailable(Request $request){
        $product_id = $request->product_id;
        $size = $request->size;
        $size_id = Size::where('size', $size)->first();
        $qty = ProductSize::where('product_id',$product_id)->where('size_id', $size_id->id)->first();
        return response()->json($qty->quantity);
    }

    public function cartTotal(){
        $data = 0;
        if(session('cart'))
        foreach(session('cart') as $id => $details){
            $data += $details['product_price'] * $details['qty'];
        }
        return response()->json($data);
    }
    
    public function cartItemTotal(){
        $data = 0;
        if(session('cart'))
        foreach(session('cart') as $id => $details){
            $data += $details['qty'];
        }
        return response()->json($data);
    }
    
    public function calculateDelivery(Request $request){
        $data = $request->quantity_total;
        return response()->json($data);
    }
    
    public function sellingTotal(){
        $data1 = 0;
        if(session('cart'))
        foreach(session('cart') as $id => $details){
            $data1 += $details['selling_price'] * $details['qty'];
        }
        return response()->json($data1);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return response()->json(['success' => 'Product removed successfully']);
        }
    }
    /////////////////////////////add to cart end
}
