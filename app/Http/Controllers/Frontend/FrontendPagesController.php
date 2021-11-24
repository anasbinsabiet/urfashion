<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Help;
use App\Models\HelpCategory;
use App\Models\Setting;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class FrontendPagesController extends Controller
{
    public function promotional_on_sale(){
        return view('frontend.promotional-on-sale');
    }
    
    public function privacy(){
        $data['setting'] = Setting::find(4);
        return view('frontend.privacy', $data);
    }
    
    public function accessibility(){
        $data['setting'] = Setting::find(4);
        return view('frontend.accessibility', $data);
    }
    
    public function low_price(){
        return view('frontend.low_price');
    }
    
    public function free_artwork_email_proof(){
        $data['setting'] = Setting::find(4);
        return view('frontend.free_artwork_email_proof', $data);
    }
    
    public function blog(){
        $data['blog'] = Blog::all();
        return view('frontend.blog', $data);
    }
    
    public function single_blog($slug){
        $data['sblog'] = Blog::where('slug_en', $slug)->first();
        $data['blogs'] = Blog::all();
        return view('frontend.single_blog', $data);
    }
    
    public function single_notice($slug){
        $data['sblog'] = Blog::where('slug_en', $slug)->first();
        $data['blogs'] = Blog::where('category_id', 3)->get();
        return view('frontend.single_notice', $data);
    }
    
    public function single_help($slug){
        $data['sblog'] = Help::where('slug_en', $slug)->first();
        $data['blogs'] = Help::all();
        return view('frontend.single_help', $data);
    }
    
    public function single_help_category($slug){
        $data['hcat'] = HelpCategory::where('slug_en', $slug)->first();
        $hcat = HelpCategory::where('slug_en', $slug)->first();
        $data['helps'] = Help::where('category_id', $hcat->id)->get();
        return view('frontend.single_help_category', $data);
    }
    
    public function wishlist(){

        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
            $data['wishlist'] = DB::table('wishlists')->where('user_id', $user_id)->pluck('product_id');
        }else{
            $data['wishlist'] = null;
        }

        return view('frontend.wishlist', $data);
    }
    
    public function notification(){

        if(!empty(Auth::user()->id))
        {
            $user_id = Auth::user()->id;
            $data['wishlist'] = DB::table('wishlists')->where('user_id', $user_id)->pluck('product_id');
        }else{
            $data['wishlist'] = null;
        }

        return view('frontend.notification', $data);
    }
    
    public function dashboard(){

        return view('frontend.dashboard');
    }
    
    public function noticeBoard(){

        return view('frontend.notice_board');
    }
}
