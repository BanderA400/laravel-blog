<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/../images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="/../images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="/../css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Merriweather">
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

	
     
    <!-- Preloader Start -->
    <div class="preloader">
      <div class="rounder"></div>
     </div>
     <!-- Preloader End -->
     
     
        <!-- Popup Search Box Start -->
        <div class="header-search open-search">
           <div class="container">
               <div class="row">
                   <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                       <div class="navbar-search">
                           <form class="search-global">
                               <input type="text" placeholder="Type then enter" autocomplete="off" name="search-query" value="" class="search-global-input" />
                               <button class="search-global-btn"><i class="icon-magnifier"></i></button>
                               <div class="search-global-note">Type your search query above and then press to enter or click on icon</div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
       </div>
       <!-- Popup Search Box End -->
     
 
   <div id="main">
       <div class="container">
           <div class="row">
               
                <!-- Content Start -->
                <div class="col-md-10 col-md-offset-1">
                   <div class="col-md-12 page-body">
                       <div class="row">
                           
                           
                           <div class="sub-title">
                           <a href="/"><h1>{{__('Blog')}}</h1></a>
                               <a href="#" class="btn-header-search"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </div>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </div>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                </div>
                            @if ($errors->any())
       <div class="alert alert-warning">
           <ul>
               @foreach ($errors->all() as $error)
           <li>{{$error}}</li>
               @endforeach
           </ul>
       </div>
           
       @endif

                           <div class="col-md-12 content-page">
                            @yield('content')
                               
                               
                            </div>
                             
                        </div>
                        
                       
                       
                       <!-- Subscribe Form Start -->
                       <div class="col-md-8 col-md-offset-2">
                          <form id="mc-form" method="post" action="Your Mailchimp URL">
                               
                         <div class="subscribe-form margin-top-20">
                            <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                             <button class="submit-btn" type="submit">Submit</button>
                               </div>
                               <p>Subscribe to our weekly newsletter</p>
                               <label for="mc-email" class="mc-label"></label>
                             </form>
                            
                          </div>
                          <!-- Subscribe Form End -->
                          
                        </div>
                    
                    
                      <!-- Footer Start -->
                      <div class="col-md-12 page-body margin-top-50 footer">
                         <footer>
                         <ul class="menu-link">
                              <li><a href="/">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="/contact">Contact</a></li>
                           </ul>
                         <p>© Copyright. All rights reserved</p>
                         

                        </footer>
                      </div>
                      <!-- Footer End -->

                 </div>
                 <!-- Content End -->
               
           </div>
        </div>
     </div>
   <!-- Back to Top Start -->
   <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
   <!-- Back to Top End -->
   
   
   <!-- All Javascript Plugins  -->
   <script type="text/javascript" src="/../js/jquery.min.js"></script>
   <script type="text/javascript" src="/../js/plugin.js"></script>
   
   <!-- Main Javascript File  -->
   <script type="text/javascript" src="/../js/scripts.js"></script>
   
  </body>
</html>
