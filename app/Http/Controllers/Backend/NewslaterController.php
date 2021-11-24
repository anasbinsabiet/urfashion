<?php

namespace App\Http\Controllers\Backend;

use App\OfflineChat;
use App\ProductHelp;
use App\Models\Newslater;
use App\Models\Contactpage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewslaterController extends Controller
{
    public function index()
    {
        $data = Newslater::latest()->get();
        return view('backend.newslater.index-newslater', compact('data'));
    }

    public function livechat()
    {
        $data = OfflineChat::all();
        return view('backend.livechat.index', compact('data'));
    }
    
    public function producthelp()
    {
        $data = ProductHelp::all();
        return view('backend.producthelp.index', compact('data'));
    }
    
    public function subscribers()
    {
        $data = Newslater::all();
        return view('backend.subscribers.index', compact('data'));
    }

    public function contactpage()
    {
        $data = Contactpage::latest()->get();
        return view('backend.contactpage.index', compact('data'));
    }

    public function destroy($id)
    {
        $data = Newslater::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Newslater deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
