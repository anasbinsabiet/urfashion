<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ImprintMethod;
use Validator;

class ImprintMethodController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ImprintMethod::latest()->get();
        return view('backend.imprint_method.index', compact('data'));
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
        $validator = Validator::make($request->all(), [
            'imprint_method' => 'required|unique:imprint_methods,imprint_method',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = new ImprintMethod;
        $data->imprint_method = $request->imprint_method;

        $data->save();
        
        $notification = array(
            'message' => 'Imprint Method created successfully!',
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
        $data = ImprintMethod::find($id);
        return view('backend.imprint_method.edit', compact('data'));
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
            'imprint_method' => 'required|unique:imprint_methods,imprint_method,'.$id,
        ]);
        $data = ImprintMethod::find($id);
        $data->imprint_method = $request->imprint_method;

        $data->save();
        
        $notification = array(
            'message' => 'ImprintMethod updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('imprintmethod.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ImprintMethod::find($id);
        $image_path = $data->brand_logo;
        @unlink(base_path($image_path));
        $data->delete();

        $notification = array(
            'message' => 'ImprintMethod deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
