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
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="{{asset('css/stylecd4e.css?version=4.1')}}" rel="stylesheet">
    <title>{{env('app_name')}} :Home </title>
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
            <div class="header-logo"><a class="d-flex" href="{{route('welcome')}}"><img alt="{{env('app_name')}}" src="{{asset('imgs/template/achievers-logo.jpg')}}" style="width:120px"></a></div>
          </div>
          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li><a class="active" href="{{route('welcome')}}">Home</a></li>                
                <li ><a href="{{route('clients')}}">Clients</a></li>
                <li ><a href="{{route('candidates')}}">Candidates</a></li>
                <li ><a href="{{route('about-us')}}">About Us</a></li>
                <li ><a href="{{route('contact-us')}}">Contact Us</a></li>              
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <div class="header-right">
            <div class="block-signin">
              <!-- @if (auth()->user())
                <a class="text-link-bd-btom hover-up" href="{{route('dashboard')}}">Profile</a>
              @else
                <a class="active" class="text-link-bd-btom hover-up" href="{{route('register')}}">Register</a>
                <a class="btn btn-default btn-shadow ml-40 hover-up" href="{{route('login')}}">Sign in</a></div>
              @endif -->
               
          </div>
        </div>
      </div>
    </header>
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
                <ul class="mobile-menu font-heading">
                <li><a  href="{{route('welcome')}}">Home</a></li>                
                <li ><a href="{{route('clients')}}">Clients</a></li>
                <li ><a href="{{route('candidates')}}">Candidates</a></li>
                <li ><a href="{{route('about-us')}}">About Us</a></li>
                <li ><a href="{{route('contact-us')}}">Contact Us</a></li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <h6 class="mb-10">Your Account</h6>
              <ul class="mobile-menu font-heading">
            <!-- @if(auth()->user())         
                <li><a href="{{route('dashboard')}}">Profile</a></li>                             
                <li><a href="page-signin.html">Sign Out</a></li>             
            @else
            <li><a class="active" href="{{route('register')}}">Register</a></li>                             
                <li><a href="{{route('login')}}">Sign In</a></li>
            @endif -->
            </ul>
            </div>
            <div class="site-copyright"> </div>
          </div>
        </div>
      </div>
    </div>

    <main class="main">
      <section class="pt-20 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <!-- <p class="font-sm text-brand-2">Register </p> -->
                @if(session('success'))
                <div class="alert alert-success">Your CV has been submitted successfully. We will review and revert shortly</div>
                @endif
                <h2 class="mt-10 mb-5 text-brand-1">Submit Resume/CV</h2>
                   <span class="text-danger">
                        @if (count($errors)>0)

                            Error processing request: <br>

                            @foreach($errors->all() as $error)
                                    {{$error}} <br>
                            @endforeach                        
                    
                        @endif
                </span>
              </div>
              <form class="login-register text-start mt-20" action="{{route('applicants.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6 " >
                      <label class="form-label" for="surname">Surname *</label>
                      <input class="form-control text-right" id="surname" type="text" required="" name="surname" placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-lg-6 float-right " >
                      <label class="form-label" for="firstname">Firstname *</label>
                      <input class="form-control text-right" id="firstname" type="text" required="" name="firstname" placeholder="">
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-lg-6 ">
                    <label class="form-label" for="othernames">Othernames </label>
                    <input class="form-control text-right" id="othernames" type="text"  name="othernames" placeholder="">
                  </div>
                  <div class="form-group col-md-6 col-lg-6 ">
                    <label class="form-label" for="othernames">Applicant type*</label>
                    <select class="form-control" required name="user_role" onChange="toggleCompanyName(this.value)">
                      <option value="">Select User type</option>
                      <option value="job-seeker">Job seeker</option>
                      <option value="recruiter">Recruiter</option>
                    </select>
                   </div>
                </div>
                <div class="form-group companyName hidden">
                  <label class="form-label" for="email">Company name *</label>
                  <input class="form-control " id="companyName" type="text"  name="company_name" placeholder="">
                </div>
                <div class="form-group">
                  <label class="form-label" for="email">Email *</label>
                  <input class="form-control" id="email" type="email" required="" name="email" placeholder="">
                </div>
                <div class="form-group">
                  <label class="form-label" for="phone">Phone *</label>
                  <input class="form-control" id="phone" type="text" required="" name="phone" placeholder="">
                </div>
                <div class="row">
                 
                <div class="form-group cv hidden">
                  <label class="form-label" for="file">CV *</label>
                  <input  id="file" type="file"  name="file" 
                  class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full">
                </div>

     <div class="login_footer form-group d-flex justify-content-between">
                 
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Submit</button>
                </div>
                </form>
            </div>

          </div>
        </div>
      </section>
    </main>
    <footer class="footer mt-50">
      <div class="container">
        <div class="row">
          <div class="footer-col-1 col-md-3 col-sm-12"><a href="{{route('welcome')}}"><img alt="{{env('app_name')}}" src="{{asset('imgs/template/achievers-logo.jpg')}}"></a>

            <div class="footer-social text-center">
              <a class="icon-socials icon-facebook" href="{{env('facebook_url')}}"></a>
              <a class="icon-socials icon-twitter" href="{{env('twitter_url')}}"></a>
              <a class="icon-socials icon-linkedin" href="{{env('linkedin_url')}}"></a></div>
          </div>
          <div class="footer-col-4 col-md-4 col-xs-6">
            <h6 class="mb-20">Resources</h6>
            <ul class="menu-footer">
              <li><a href="{{route('about-us')}}">About us</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="{{route('contact-us')}}">Contact</a></li>
            </ul>
          </div>
          <div class="footer-col-4 col-md-4 col-xs-6">
            <h6 class="mb-20">Community</h6>
            <ul class="menu-footer">
              <li><a href="#">Feature</a></li>
              <li><a href="{{route('privacy')}}">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col-4 col-md-4 col-xs-6">
            <h6 class="mb-20">More</h6>
            <ul class="menu-footer">
              <li><a href="{{route('privacy')}}">Privacy</a></li>
              <li><a href="{{route('privacy')}}">Help</a></li>
              <li><a href="{{route('privacy')}}">Terms</a></li>
          
            </ul>
          </div>
         
        </div>
        <div class="footer-bottom mt-50">
          <div class="row">
            <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; {{\Carbon\Carbon::now()->format('Y')}}. {{env('app_name')}}</span></div>
            <div class="col-md-6 text-md-end text-start">
              <div class="footer-social"><a class="font-xs color-text-paragraph" href="{{route('privacy')}}">Privacy Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms &amp; Conditions</a><a class="font-xs color-text-paragraph" href="#">Security</a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('js/plugins/wow.js')}}"></script>
    <script src="{{asset('js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('js/plugins/isotope.js')}}"></script>
    <script src="{{asset('js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/counterup.js')}}"></script>
    <script src="{{asset('js/main8c94.js?v=4.1')}}"></script>
  </body>
</html>