@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <!-- Register PAGE START -->
    <div class="signin-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 col-sm-12 py-lg-4 m-auto">
                    <div class="card login-card signin-card my-4">
                        <h3 class="text-center mt-4">Sing Up</h3>
                        <h6 class="text-center mb-3">As a Saudi Hemam User</h6>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control custom-form-control" placeholder="full name" value="{{ old('name') }}" name="name">
                                        @error('name')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control custom-form-control" placeholder="email address" value="{{ old('email') }}" name="email">
                                        @error('email')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">Phone No</label>
                                        <input type="text" class="form-control custom-form-control" placeholder="phone no." value="{{ old('phone') }}" name="phone">
                                        @error('phone')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control custom-form-control" placeholder="password" value="{{ old('password') }}" name="password">
                                        @error('password')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-4">
                                        <label class="form-label">Re-type Password</label>
                                        <input type="password" class="form-control custom-form-control" placeholder="re-type password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                                        @error('password_confimation')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="" type="submit" name="submit"> Register </button>
                                <a class="d-flex justify-content-start text-white fw-bolder mt-2 ms-lg-5 mb-5" href="{{ route('login') }}">Already Have a Account ! <em>&nbsp; Sign In</em></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register PAGE END -->
@endsection


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
