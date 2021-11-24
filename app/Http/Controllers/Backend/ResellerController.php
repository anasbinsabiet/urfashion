<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('role',2)->get();
        return view('backend.reseller.index-reseller', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reseller.create-reseller');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // return $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|mobile|unique:users,mobile',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:6'
        ]);

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->password = bcrypt($request->password);
        $data->role = 2;

        $data->shop_name = $request->shop_name;
        $data->facebook_page_link = $request->facebook_page_link;
        $data->whatsapp_imo = $request->whatsapp_imo;
        $data->gender = $request->gender;
        $data->bkash = $request->bkash;
        $data->nagad = $request->nagad;
        $data->bank_account_name = $request->bank_account_name;
        $data->bank_account_number = $request->bank_account_number;
        $data->bank_name = $request->bank_name;
        $data->bank_branch_name = $request->bank_branch_name;
        $data->routing_number = $request->routing_number;
        $data->save();

        $notification = array(
            'message' => 'Successfully Reseller Added!',
            'alert-type' => 'success'
        );
        return redirect()->route('reseller.index')->with($notification);
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
        $editData = User::find($id);
        return view('backend.reseller.edit-reseller', compact('editData'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'mobile' => 'required|unique:users,mobile,' . $id,
        ]);
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;

        $data->shop_name = $request->shop_name;
        $data->facebook_page_link = $request->facebook_page_link;
        $data->whatsapp_imo = $request->whatsapp_imo;
        $data->gender = $request->gender;
        $data->bkash = $request->bkash;
        $data->nagad = $request->nagad;
        $data->bank_account_name = $request->bank_account_name;
        $data->bank_account_number = $request->bank_account_number;
        $data->bank_name = $request->bank_name;
        $data->bank_branch_name = $request->bank_branch_name;
        $data->routing_number = $request->routing_number;
        $data->save();

        $notification = array(
            'message' => 'Successfully Reseller Updated!',
            'alert-type' => 'success'
        );
        return redirect()->route('reseller.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt = User::find($id);
        $dlt->delete();

        $notification = array(
            'message' => 'Successfully Reseller deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}