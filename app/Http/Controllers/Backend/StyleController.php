<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Style;
use Validator;

class StyleController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Style::latest()->get();
        return view('backend.style.index', compact('data'));
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
            'style_name' => 'required|unique:styles,style_name',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = new Style;
        $data->style_name = $request->style_name;

        $data->save();
        
        $notification = array(
            'message' => 'style created successfully!',
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
        $data = Style::find($id);
        return view('backend.style.edit', compact('data'));
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
            'style_name' => 'required|unique:styles,style_name,'.$id,
        ]);
        $data = Style::find($id);
        $data->style_name = $request->style_name;

        $data->save();
        
        $notification = array(
            'message' => 'Style updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('style.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Style::find($id);
        $image_path = $data->brand_logo;
        @unlink(base_path($image_path));
        $data->delete();

        $notification = array(
            'message' => 'Style deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
