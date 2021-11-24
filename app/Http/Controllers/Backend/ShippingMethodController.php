<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShippingMethod;
use Validator;

class ShippingMethodController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ShippingMethod::orderBy('id', 'ASC')->get();
        return view('backend.shipping_method.index', compact('data'));
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
        // return response()->json($request->all());
        $validator = Validator::make($request->all(), [
            'district_name' => 'required',
            'delivery_charge' => 'required',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = new ShippingMethod;
        $data->quantity_from = $request->quantity_from;
        $data->quantity_to = $request->quantity_to;
        $data->district_name = $request->district_name;
        $data->delivery_charge = $request->delivery_charge;

        $data->save();
        
        $notification = array(
            'message' => 'Shipping Method created successfully!',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ShippingMethod::find($id);
        return view('backend.shipping_method.edit', compact('data'));
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
        $validatedData = $request->validate([
            'district_name' => 'required',
            'delivery_charge' => 'required',
        ]);
        $data = ShippingMethod::find($id);
        $data->quantity_from = $request->quantity_from;
        $data->quantity_to = $request->quantity_to;
        $data->district_name = $request->district_name;
        $data->delivery_charge = $request->delivery_charge;

        $data->save();
        
        $notification = array(
            'message' => 'Shipping Method updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('shippingmethod.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ShippingMethod::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Shipping Method deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
