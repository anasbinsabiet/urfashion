<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SleeveLength;
use Validator;

class SleeveLengthController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SleeveLength::latest()->get();
        return view('backend.sleeve_length.index', compact('data'));
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
            'sleeve_length' => 'required|unique:sleeve_lengths,sleeve_length',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Data Not Inserted!',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $data = new SleeveLength;
        $data->sleeve_length = $request->sleeve_length;

        $data->save();
        
        $notification = array(
            'message' => 'Sleeve Length created successfully!',
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
        $data = SleeveLength::find($id);
        return view('backend.sleeve_length.edit', compact('data'));
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
            'sleeve_length' => 'required|unique:sleeve_lengths,sleeve_length,'.$id,
        ]);
        $data = SleeveLength::find($id);
        $data->sleeve_length = $request->sleeve_length;

        $data->save();
        
        $notification = array(
            'message' => 'Sleeve Length updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('sleevelength.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SleeveLength::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Sleeve Length deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
