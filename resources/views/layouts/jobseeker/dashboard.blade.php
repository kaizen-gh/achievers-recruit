<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.html" crossorigin>
    <meta name="msapplication-config" content="browserconfig.html">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="{{asset('dash/css/stylecd4e.css?version=4.1')}}" rel="stylesheet">
    <title>{{env('app_name')}} | Dashboard </title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{asset('imgs/template/loading.gif')}}" alt="{{env('app_name')}}"></div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar"> 
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo">
              <a class="d-flex" href="{{route('dashboard')}}">
                <img style="width:130px" alt="{{env('app_name')}}" src="{{asset('imgs/template/achievers-logo.jpg')}}">
              </a>
          </div>
          </div>
   
          <div class="header-menu d-none d-md-block">
            <ul> 
              <li> <a href="{{route('welcome')}}">Home </a></li>
              <li> <a href="{{route('about-us')}}">About us </a></li>
              <li> <a href="{{route('contact-us')}}">Contact</a></li>
            </ul>
          </div>
          <div class="header-right">
            <div class="block-signin">
              <div class="dropdown d-inline-block"><a class="btn btn-notify" id="dropdownNotify" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownNotify">
                  <li><a class="dropdown-item active" href="#">10 notifications</a></li>
                  <li><a class="dropdown-item" href="#">12 messages</a></li>
                  <li><a class="dropdown-item" href="#">20 replies</a></li>
                </ul>
              </div>
              <div class="member-login"><img alt="" src="{{asset('imgs/page/dashboard/profiles.svg')}}">
                <div class="info-member"> <strong class="color-brand-1">{{auth()->user()->firstname.' '.auth()->user()->surname}}</strong>
                  <div class="dropdown"><a class="font-xs color-text-paragraph-2 icon-down" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">Candidate</a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                      <li><a class="dropdown-item" href="">Profile</a></li>
                      <li><a class="dropdown-item" href="#" onclick="return logOut()">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-search mobile-header-border mb-30">
              <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="main-menu">                 
                  <li> <a class="dashboard2 active" href="{{route('dashboard')}}">
                    <img src="{{asset('imgs/page/dashboard/profiles.svg')}}" alt="{{env('app_name')}}">
                    <span class="name">My Profile</span></a>
                  </li>
                  <li> 
                   
               
                      <img src="{{asset('imgs/page/dashboard/logout.svg')}}" alt="{{env('app_name')}}">  
                      <button class="btn-link">Logout</button>
                    </form>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <h6 class="mb-10">Your Account</h6>
              <ul class="mobile-menu font-heading">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Work Preferences</a></li>
                <li><a href="#">Account Settings</a></li>  
                <li><a href="#" onClick="return logOut()">Sign Out</a></li>
              </ul>
              <div class="mb-15 mt-15"></div>
            </div>
            <div class="site-copyright">Copyright 2023 &copy; {{env('app_name')}}</div>
          </div>
        </div>
      </div>
    </div>
    <main class="main">
      <div class="nav"><a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
          <ul class="main-menu">           
          <li><h3>&nbsp;</h3></li> 
            <li> <a class="dashboard2 " href="{{route('dashboard')}}"><img src="{{asset('imgs/page/dashboard/profiles.svg')}}" alt="{{env('app_name')}}"><span class="name">My Profile</span></a></li>          
            <li><a class="dashboard2" href="#" onclick="return logOut()"><img src="{{asset('imgs/page/dashboard/logout.svg')}}" alt="{{env('app_name')}}"><span class="name">Logout</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">My Profile</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="{{route('welcome')}}">Candidate</a></li>
                <li><span>My Profile</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row"> 
          <form id="form" action="" method="POST" >
            @csrf
          <div class="col-xxl-9 col-xl-8 col-lg-8">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Update your profile</h6>                   
                    <div class="row"> 
                      <div class="col-lg-12 col-md-12">
                        <div class="alert alert-success">
                          Your Account is verified and active
                          
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Email *</label>
                          <input class="form-control" type="text" value="{{auth()->user()->email}}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Surname *</label>
                          <input class="form-control" name="surname" type="text" value="{{auth()->user()->surname}}">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Firstname *</label>
                          <input class="form-control" name="firstname"  type="text"  value="{{auth()->user()->firstname}}">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Othername(s)</label>
                          <input class="form-control" name="othernames" type="text"  value="{{auth()->user()->othernames}}">
                        </div>
                      </div>                     
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Contact number</label>
                          <input class="form-control" type="text"  value="{{auth()->user()->phone}}">
                        </div>
                      </div>   
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Uploaded Information</h6>
                    <div class="row mt-30">
                      
                      <div class="col-lg-12">
                        <div class="form-group mb-30">
                        
                         <a href="{{asset('storage/uploads/'.auth()->user()->cv_url)}}" target="_blank">View Uploaded CV</a>
                        </div>
                      </div>                 
                      <div class="col-lg-12"> 
                        <div class="form-group mt-0">
                          <button class="btn btn-default btn-brand icon-tick">Save Change</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>       
        </div>
        <footer class="footer mt-20">
          <div class="container">
            <div class="box-footer">
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                  <p class="font-sm color-text-paragraph-2">© 2023 - <a class="color-brand-2" href="" target="_blank">{{env('app_name')}} </a></p>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                  <ul class="menu-footer">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
    <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('dash/js/plugins/jquery.circliful.js')}}"></script>
    <script src="{{asset('js/main8c94.js?v=4.1')}}"></script>
  </body>
</html>