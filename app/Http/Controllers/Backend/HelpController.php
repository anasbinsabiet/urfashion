<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Help;
use App\Models\HelpCategory;
use App\HelpImage;
use Illuminate\Support\Str;
use Validator;
use File;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['helps'] = Help::latest()->get();
        return view('backend.help.index-help', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = HelpCategory::all();
        return view('backend.help.create-help',$data);
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
            'title_en' => 'required|unique:helps,title_en',
            // 'title_bn' => 'required|unique:helps,title_bn',
            'category_id' => 'required',
            'description_en' => 'required',
            // 'description_bn' => 'required',
            // 'image' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $help = new Help;
        $help->title_en                   = $request->title_en;
        $help->title_bn                   = $request->title_bn;
        $help->category_id                = $request->category_id;
        $help->slug_en                    = Str::slug($request->title_en);
        $help->description_en             = $request->description_en;
        $help->status                     = $request->status;
        $help->save();

        // Image
        // $defaultImage = $request->file('image');
        // if ($defaultImage) {
        //     $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
        //     $defaultImage->move(base_path('uploaded/help'), $imageName);
        //     $help->image = '/uploaded/help/' . $imageName;
        // }

        if(!empty($request->help_image))
        {   
            $photos = $request->file('help_image');
            foreach ($photos as $photo) {
                $filename = $photo->getClientOriginalName();
                $photo->move(base_path('uploaded/product'), $filename);

                $ProjectPhoto = new HelpImage;
                $ProjectPhoto->help_id = $help->id;
                $ProjectPhoto->help_image   = '/uploaded/product/' . $filename;
                $ProjectPhoto->save();
            }
        }

        

        $notification = array(
            'message' => 'help created successfully!',
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
        $data['help'] = Help::find($id);
        return view('backend.help.show-help', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['help'] = Help::find($id);
        $data['categories'] = HelpCategory::all();
        $data['help_images'] = HelpImage::where('help_id', $id)->get();
        return view('backend.help.edit-help', $data);
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
        // return response()->json($request->all());
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|unique:helps,title_en,'.$id,
            // 'title_bn' => 'required|unique:helps,title_bn,'.$id,
            'category_id' => 'required',
            'description_en' => 'required',
            // 'description_bn' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $help = Help::find($id);
        $help->title_en                   = $request->title_en;
        $help->title_bn                   = $request->title_bn;
        $help->category_id                = $request->category_id;
        $help->slug_en                    = Str::slug($request->title_en);
        $help->description_en             = $request->description_en;
        $help->description_bn             = $request->description_bn;
        $help->status                     = $request->status;

        // Image
        $defaultImage = $request->file('image');
        if ($defaultImage) {
            $image_path = base_path($help->image);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
            $defaultImage->move(base_path('uploaded/help'), $imageName);
            $help->image = '/uploaded/help/' . $imageName;
        }

        $help->save();

        if(!empty($request->help_image))
        {   
            $photos = $request->file('help_image');
            foreach ($photos as $photo) {
                $filename = $photo->getClientOriginalName();
                $photo->move(base_path('uploaded/product'), $filename);

                $ProjectPhoto = new HelpImage;
                $ProjectPhoto->help_id = $help->id;
                $ProjectPhoto->help_image   = '/uploaded/product/' . $filename;
                $ProjectPhoto->save();
            }
        }

        $notification = array(
            'message' => 'Help updated successfully!',
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
    public function destroy($id)
    {
        $help = Help::find($id);
        $image_path = public_path($help->image);
        @unlink($image_path);
        $help->delete();

        $notification = array(
            'message' => 'Help deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function himageDelete($id)
    {   
        $ci = HelpImage::find($id);
        if(File::exists(base_path('uploaded/product'), $ci->help_image)){
            File::delete(base_path('uploaded/product'), $ci->help_image);
        }
        $ciis = HelpImage::destroy($id);
        if($ciis){
            return response()->json('success');
        }
    }

    public function help_status(Request $request, $id)
    {
        $help = Help::find($id);
        $help->status = $request->status;
        $help->save();

        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
