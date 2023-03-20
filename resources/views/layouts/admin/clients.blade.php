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
          <li> <a class="dashboard2 " href="{{route('dashboard.candidates')}}"><img src="{{asset('imgs/page/dashboard/profiles.svg')}}" alt="{{env('app_name')}}"><span class="name">Candidates</span></a></li>          
          <li> <a class="dashboard2 " href="{{route('dashboard.clients')}}"><img src="{{asset('imgs/page/dashboard/recruiters.svg')}}" alt="{{env('app_name')}}"><span class="name">Clients</span></a></li>          
          <li> <a class="dashboard2 " href="{{route('dashboard')}}"><img src="{{asset('imgs/page/dashboard/profiles.svg')}}" alt="{{env('app_name')}}"><span class="name">My Profile</span></a></li>          
            <li><a class="dashboard2" href="#" onclick="return logOut()"><img src="{{asset('imgs/page/dashboard/logout.svg')}}" alt="{{env('app_name')}}"><span class="name">Logout</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Clients</h3>
          </div>
          
        </div>
        <div class="row"> 
          
          <div class="col-xxl-12 col-xl-12 col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                  <div class="row">
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-1.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Car Toys</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View </button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-2.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Carols Daughter</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>                           <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-3.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Amazon</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-4.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Baseball Savings</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success">View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-5.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Ashford</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-6.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Callaway Golf</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-7.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Percepta</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div></span>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-8.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Exela Movers</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-9.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Ibotta, Inc</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-1.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Wanderu </a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-2.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Aceable, Inc.</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-3.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Intrepid Travel</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-4.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Defendify </a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-5.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Twisters </a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-6.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Fireworks</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-1.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Car Toys</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                     
                    
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><a href="#"><img src="{{asset('imgs/brands/brand-5.png')}}" alt="{{env('app_name')}}"></a></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><a href="company-details.html">Ashford</a></h5>
                            <div class="mt-5"><span class="font-xs color-text-mutted ml-10"></div>
                            <div class="mt-30"><a class="btn btn-grey-big" href="#"><button class="btn btn-success"> View</button></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12"></div>
                    </div>
                  </div>
                </div>
           
              </div>
            </div>
          </div>
           
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