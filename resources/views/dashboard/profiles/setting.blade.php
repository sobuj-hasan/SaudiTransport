@extends('layouts.app')
@section('title', 'User Profile Edit')
@section('content')
    <section class="dashboard">
        <div class="container">
            <div class="user-dashboard">
                <div class="row">
                    <!-- Dashboard left bar Here ! -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <div class="profile">
                                <img src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="">
                                <h3>{{ Auth::user()->name }}</h3>
                                <p>{{ Auth::user()->phone }}</p>
                                <div class="btn">
                                    <a class="btn btn-outline-info" href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i> profile edit </a>
                                </div>
                            </div>
                            <div class="left-menu">
                                <ul>
                                    <li class="">
                                        <a href="{{ route('dashboard.index') }}"><i class="fas fa-id-card"></i>&nbsp; Dashboard </a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ route('user.setting') }}"><i class="fas fa-user-alt"></i>&nbsp; Profile Settings</a>
                                    </li>
                                    <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button><i class="fas fa-sign-out-alt"></i> Logout</button>
                                    </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <style>
                            .card-box{
                                box-shadow: 0px 0px 4px 0px #00000040;
                            }
                        </style>
                        <div class="card-box p-5">
                            <h4 class="m-t-0 m-b-30 header-title mb-4">Change Password <a class="btn btn-sm btn-info float-right" href="{{ route('dashboard.index') }}" title=""> < Back Profile </a></h4>
                            
                                <form action="{{ route('user.setting.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group my-4">
                                    <label for="url">Old Password</label>
                                    <input type="password" name="current_password" value="{{ old('current_password') }}" class="form-control" placeholder="Enter New Password" />
                                    <div class="text-danger">{{ $errors->first('current_password') }}</div>
                                </div>
                                    
                                <div class="form-group my-4">
                                    <label for="details">New Password</label>
                                    <input type="password" name="new_password" value="{{ old('new_password') }}" class="form-control" placeholder="Enter New Password" />
                                    <div class="text-danger">{{ $errors->first('new_password') }}</div>
                                </div>
                                    
                                <div class="form-group my-4">
                                    <label for="name">Confirm Password</label>
                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Enter Confirm Password" />
                                    <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                                </div>
                                    

                                <button type="submit" class="btn btn-primary m-r-5">Update Password</button>
                                <a class="btn btn-info" href="{{ route('dashboard.index') }}"> < Back Profile</a>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

