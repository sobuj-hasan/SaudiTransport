<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function aboutus(){
        return view('about');
    }

    public function carservices(){
        return view('car_services');
    }
    
    public function contactus(){
        return view('contactus');
    }

    public function driver_services(){
        return view('driver_services');
    }

    public function gallery(){
        return view('gallery');
    }


    // public function blogdetails($slug){
    //     $data['single_blog'] = Blog::where('slug', $slug)->firstOrFail();
    //     $data['related_blog'] = Blog::where('category_id', $data['single_blog']->category_id)->where('id', '!=', $data['single_blog']->id)->limit(4)->get();
    //     return view('blog_details', $data);
    // }

    // public function subscribe(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //     ]);
    //     $subscribe = Subscribe::where('email', $request->email)->count();
    //     if ($subscribe != 0) {
    //         Notify::error('This email address already exists', 'Error');
    //         return back();
    //     }
    //     if (Auth::user()) {
    //         $user_id = Auth::user()->id;
    //         Subscribe::create($request->except('_token') + [
    //             'user_id' => $user_id,
    //         ]);
    //     } else {
    //         Subscribe::create($request->except('_token'));
    //     }
    //     Notify::success('Successfully Subscribed our newslatter', 'Congrats, Dear');
    //     return back();
    // }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}
