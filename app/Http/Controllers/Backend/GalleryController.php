<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use App\Models\Product;
use Illuminate\Support\Str;
use Validator;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galleries'] = Gallery::all();
        $data['products1'] = Product::all();
        return view('backend.gallery.index-gallery', $data);
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
        $request->validate([
           'product_id' => 'required',
           'default_image' => 'required'
        ]);

        $data = new Gallery();
        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
        }
        else
        {
            $user_id = 1;
        }
        $data->product_id = $request->product_id;
        $data->user_id = $user_id;

        $image = $request->file('default_image');

        if ($image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(base_path('uploaded/product'), $imageName);
            $data->default_image = '/uploaded/product/' . $imageName;
        }

        $data->save();

        $notification = array(
            'message' => 'Gallery added successfully!',
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
        $data['galleries'] = Gallery::where('id', $id)->get();
        $data['products'] = Product::all();
        return view('backend.gallery.edit-gallery', $data);
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
            'product_id' => 'required',
        ]);
        $data = Gallery::find($id);
        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
        }
        else
        {
            $user_id = 1;
        }
        $data->product_id = $request->product_id;
        $data->user_id = $user_id;

        $image = $request->file('default_image');

        if ($image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image_path = $data->default_image;
            @unlink(base_path($image_path));
            $image->move(base_path('uploaded/product'), $imageName);
            $data->default_image = '/uploaded/product/' . $imageName;
        }

        $data->save();
        
        $notification = array(
            'message' => 'Gallery updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('gallery.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Gallery deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}