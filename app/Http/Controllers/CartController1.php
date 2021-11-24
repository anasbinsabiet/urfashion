<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Validator;
use Auth;

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
        dd("DELLO");
    }

    public function orderconfirm()
    {
        dd("HELLO");
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
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'email_address' => 'required',
            'total_items' => 'required'
        ]);

        if ($validator->fails()) 
        {
            $notification = array(
                'message' => 'Required field is empty, Check again...',
                'alert-type' => 'error'
            );
            return response()->json($notification);
        }
        else
        {

            $cart = new Cart();

            $cart->product_id = $request->product_id;
            $cart->item_color = $request->item_color;
            $cart->total_items = $request->total_items;
            $cart->small = $request->small;
            $cart->medium = $request->medium;
            $cart->large = $request->large;
            $cart->axal = $request->axal;
            $cart->twoxl = $request->twoxl;
            $cart->threexl = $request->threexl;
            $cart->fourxl = $request->fourxl;
            $cart->left_chest = $request->left_chest;
            $cart->left_chest_no_of_imprint_color = $request->left_chest_no_of_imprint_color;
            $cart->left_chest_imprint_color_1 = $request->left_chest_imprint_color_1;
            $cart->left_chest_imprint_color_2 = $request->left_chest_imprint_color_2;
            $cart->left_chest_imprint_color_3 = $request->left_chest_imprint_color_3;
            $cart->left_chest_imprint_color_4 = $request->left_chest_imprint_color_4;
            $cart->left_chest_imprint_color_5 = $request->left_chest_imprint_color_5;
            $cart->left_chest_imprint_color_6 = $request->left_chest_imprint_color_6;
            $cart->left_chest_imprint_color_7 = $request->left_chest_imprint_color_7;
            $cart->left_chest_imprint_color_8 = $request->left_chest_imprint_color_8;
            $cart->full_front = $request->full_front;
            $cart->full_front_no_of_imprint_color = $request->full_front_no_of_imprint_color;
            $cart->full_front_imprint_color_1 = $request->full_front_imprint_color_1;
            $cart->full_front_imprint_color_2 = $request->full_front_imprint_color_2;
            $cart->full_front_imprint_color_3 = $request->full_front_imprint_color_3;
            $cart->full_front_imprint_color_4 = $request->full_front_imprint_color_4;
            $cart->full_front_imprint_color_5 = $request->full_front_imprint_color_5;
            $cart->full_front_imprint_color_6 = $request->full_front_imprint_color_6;
            $cart->full_front_imprint_color_7 = $request->full_front_imprint_color_7;
            $cart->full_front_imprint_color_8 = $request->full_front_imprint_color_8;
            $cart->full_back = $request->full_back;
            $cart->full_back_no_of_imprint_color = $request->full_back_no_of_imprint_color;
            $cart->full_back_imprint_color_1 = $request->full_back_imprint_color_1;
            $cart->full_back_imprint_color_2 = $request->full_back_imprint_color_2;
            $cart->full_back_imprint_color_3 = $request->full_back_imprint_color_3;
            $cart->full_back_imprint_color_4 = $request->full_back_imprint_color_4;
            $cart->full_back_imprint_color_5 = $request->full_back_imprint_color_5;
            $cart->full_back_imprint_color_6 = $request->full_back_imprint_color_6;
            $cart->full_back_imprint_color_7 = $request->full_back_imprint_color_7;
            $cart->full_back_imprint_color_8 = $request->full_back_imprint_color_8;
            $cart->right_sleeve = $request->right_sleeve;
            $cart->right_sleeve_no_of_imprint_color = $request->right_sleeve_no_of_imprint_color;
            $cart->right_sleeve_imprint_color_1 = $request->right_sleeve_imprint_color_1;
            $cart->right_sleeve_imprint_color_2 = $request->right_sleeve_imprint_color_2;
            $cart->right_sleeve_imprint_color_3 = $request->right_sleeve_imprint_color_3;
            $cart->right_sleeve_imprint_color_4 = $request->right_sleeve_imprint_color_4;
            $cart->right_sleeve_imprint_color_5 = $request->right_sleeve_imprint_color_5;
            $cart->right_sleeve_imprint_color_6 = $request->right_sleeve_imprint_color_6;
            $cart->right_sleeve_imprint_color_7 = $request->right_sleeve_imprint_color_7;
            $cart->right_sleeve_imprint_color_8 = $request->right_sleeve_imprint_color_8;
            $cart->packaging_option = $request->packaging_option;
            $cart->user_id = $request->user_id;
            $cart->email_address = $request->email_address;

            $cart->save();

            $notification = array(
                'message' => 'Cart added successfully!',
                'alert-type' => 'success'
            );
        }

        return response()->json($notification);
        // return view('frontend.cart')->with($notification);
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
    public function destroy(Cart $cart)
    {
        //
    }
}