<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $data['users'] = User::count();
        $data['blogs'] = Blog::count();
        $data['subscriber'] = Subscribe::count();
        return view('admin.dashboard', $data);
    }
}
