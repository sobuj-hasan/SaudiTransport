<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> @yield('title') | SAUDI CHAUFFEUR</title>
      <!-- css -->
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- Toaster Bootstrap cdn -->
      <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"/>
      <link rel="stylesheet" href="{{ asset('css/font.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body class="page-1-body">
      <div class="Section-one">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-one-design">
                     <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                           <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo/saudi-chauffeur-service&-drivers. (1).png') }}" alt=""></a>
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav">
                                 <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('aboutus') }}">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('car.services') }}">Car Service</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('driver.services') }}">Our-Driver</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contactus') }}">Contact</a>
                                 </li>
                                 @if (Auth::guest())
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        @if (Auth::user()->role == 1)
                                            <a href="{{ route('admin.index') }}" class="nav-link">
                                                Admin Panel
                                            </a>
                                        @elseif(Auth::user()->role == 2)
                                            <a href="{{ route('dashboard.index') }}" class="nav-link">
                                                User Dashboard
                                            </a>
                                        @endif
                                    </li>
                                @endif
                              </ul>
                           </div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- section-1 end -->

    @yield('content')

    <!-- sec-5 start -->
    <div class="sec-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sec-5-dgn">
                <img src="{{ asset('img/logo/saudi-chauffeur-service&-drivers. (1).png') }}" alt="">
                <h1>we are your safe space on wheels.</h1>
                <h3><span>ADDRESS:</span> 3575 Prince Sultan Bin Abdulaziz Rd, Al Olaya, Riyadh 12311 7219, Saudi Arabia</h3>
                <h3><span>PHONE:</span> 0506372488</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sec-5-dgn">
                <h2>USEFUL LINKS</h2>
                <h3><a href="{{ route('aboutus') }}">ABOUT</a></h3>
                <h3><a href="{{ route('car.services') }}">OUR-SERVICE</a></h3>
                <h3><a href="{{ route('driver.services') }}">OUR-DRIVER</a></h3>
                <h3><a href="{{ route('contactus') }}">CONTACT</a></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sec-5-dgn">
                <h2>CONTACT</h2>
                <ul>
                    <li><a href="https://www.facebook.com/saudichauffeurservice/"><i class="fab fa-facebook"></i></a></li>
                    <li>
                        <h3><span>PHONE:</span> 0506372488</h3>
                    </li>
                    <li>BOOKING 24/7</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- sec-5 end -->
    <!-- js -->
    <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    {!! Notify::message() !!}
    {{-- notify any errors --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error(`{!! $error !!}`, 'Error')
        </script>
        @endforeach
    @endif


</body>
</html>







