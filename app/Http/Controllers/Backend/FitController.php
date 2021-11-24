<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fit;
use Validator;

class FitController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fit::latest()->get();
        return view('backend.fit.index', compact('data'));
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
            'fit_name' => 'required|unique:fits,fit_name',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = new Fit;
        $data->fit_name = $request->fit_name;

        $data->save();
        
        $notification = array(
            'message' => 'Fit created successfully!',
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
        $data = Fit::find($id);
        return view('backend.fit.edit', compact('data'));
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
            'fit_name' => 'required|unique:fits,fit_name,'.$id,
        ]);
        $data = Fit::find($id);
        $data->fit_name = $request->fit_name;

        $data->save();
        
        $notification = array(
            'message' => 'fit updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('fit.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Fit::find($id);
        $image_path = $data->brand_logo;
        @unlink(base_path($image_path));
        $data->delete();

        $notification = array(
            'message' => 'fit deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
