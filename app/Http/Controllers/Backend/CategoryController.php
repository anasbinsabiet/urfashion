<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest()->get();
        return view('backend.category.index-category', compact('data'));
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
        // echo "<pre>";
        // print_r($request->all());
        // die();
        $request->validate([
           'category_name' => 'required'
        ]);

        // echo "<pre>";
        // print_r($request->all());
        // die;

        $data = new Category();

        $data->category_name = $request->category_name;
        $data->slug          = Str::slug($request->category_name);
        $data->parent_id          = $request->parent_id;
        $data->on_sale          = $request->on_sale;

        $image = $request->file('default_image');

        if ($image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(base_path('uploaded/product'), $imageName);
            $data->default_image = '/uploaded/product/' . $imageName;
        }

        $data->save();

        $notification = array(
            'message' => 'Category created successfully!',
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
        $categories = Category::where('id', '!=', $id)->get();
        $data = Category::findOrFail($id);
        return view('backend.category.edit-category', compact('data', 'categories'));
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
            'category_name' => 'required|unique:categories,category_name,'.$id
        ]);
        $data = Category::find($id);
        $data->category_name = $request->category_name;
        $data->slug = Str::slug($request->category_name);
        $data->parent_id = $request->parent_id;
        $data->on_sale          = $request->on_sale;

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
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Category deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
