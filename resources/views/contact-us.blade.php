<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="msapplication-config" content="browserconfig.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="{{asset('css/stylecd4e.css?version=4.1')}}" rel="stylesheet">
    <title>{{env('app_name')}} :Home </title>
    <style>
          .bg-img-about {
              background: url(../imgs/page/contact-us.jpg) no-repeat  top center;
              height:400px;
          }
    </style>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{asset('imgs/template/loading.gif')}}" alt="Achievers Recruitment Limited"></div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="{{route('welcome')}}"><img alt="Achievers Recruitment Limited" src="{{asset('imgs/template/achievers-logo.jpg')}}" style="width:120px"></a></div>
          </div>
          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li><a  href="{{route('welcome')}}">Home</a></li>                
                <li ><a href="{{route('clients')}}">Clients</a></li>
                <li ><a href="{{route('candidates')}}">Candidates</a></li>
                <li ><a href="{{route('about-us')}}">About Us</a></li>
                <li ><a class="active" href="{{route('contact-us')}}">Contact Us</a></li>              
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <div class="header-right">
            <div class="block-signin">
              <!-- @if (auth()->user())
                <a class="text-link-bd-btom hover-up" href="{{route('dashboard')}}">Profile</a>
              @else
                <a class="text-link-bd-btom hover-up" href="{{route('register')}}">Register</a>
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
                <li><a class="active" href="{{route('welcome')}}">Home</a></li>                
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
            <li><a href="{{route('register')}}">Register</a></li>                             
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
      <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="mb-10">Contact Us</h2>
                <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
              </div>
              <div class="col-lg-6 text-lg-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class="home-icon" href="#">Home</a></li>
                  <li>Contact Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
   
      <section class="section-box mt-40">
        <div class="container">
          <div class="row">
          @if(session('response-success'))
            <div class="alert alert-success">Your message has been sent successfully!</div>
          @elseif(session('response-error'))
          <div class="alert alert-danger">Error sending message, please try again</div>
          @endif
          <span class="font-md color-brand-2 mt-20 d-inline-block">Contact us</span>
              <h2 class="mt-5 mb-10">Get in touch</h2>
                      <div class="col-lg-12">
                        <div class="form-group mb-10">                          
                          <div class="box-map"> 
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2454.2531975405636!2d-0.7627069000000001!3d52.03870129999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877aaa243a81a4d%3A0x188c3818635283f1!2s314%20Midsummer%20Blvd%2C%20Milton%20Keynes%20MK9%201BW%2C%20UK!5e0!3m2!1sen!2sgh!4v1678105968791!5m2!1sen!2sgh" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                        </div>
                      </div>
            <div class="col-lg-8 mb-40">
              <h4>Kindly leave us a message.</h4>
              <p class="font-md color-text-paragraph-2"> We would revert soon.</p>
              <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                @csrf
                <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="name" placeholder="Enter your name" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="company" placeholder="Company/Organisation (optional)" type="text">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="email" placeholder="Your email" type="email">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Phone number" type="tel">
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="textarea-style mb-30">
                      <textarea class="font-sm color-text-paragraph-2" name="message" placeholder="Please enter your message here"></textarea>
                    </div>
                    <button class="submit btn btn-send-message" type="submit">Send message</button>
                   
                  </div>
                </div>
              </form>
              <p class="form-messege"></p>
            </div>
            <div class="col-lg-4 text-start d-none d-lg-block">
            <h6 class="mt-50">Address</h6>
                <p class="font-sm color-text-paragraph mb-20"> Regus <br class="d-none d-lg-block">
                                                                314 Midsummer Boulevard   <br class="d-none d-lg-block">
                                                                Milton Keynes  <br class="d-none d-lg-block">
                                                                MK9 2UB 
                </p>

                <h6 class="mt-40"><i class=""></i>Email Address</h6>
                <p class="font-sm color-text-paragraph mb-20">
                    <a href="mailto:info@achieversrecruit.com">info@achieversrecruit.com</a><br class="d-none d-lg-block"> 
                    <a href="mailto:apply@achieversrecruit.com">apply@achieversrecruit.com</a>
                </p>

                <h6 class="mt-40">Primary Contact</h6>
                <p class="font-sm color-text-paragraph mb-20"> 
                  <a href="tel:+447341621109"> +447341621109 </a>
                </p>

                <h6 class="mt-40">Secondary Contact</h6>
                <p class="font-sm color-text-paragraph mb-20">
                  <a href="tel:+447341621103"> +447341621103 </a>
                </p>
            </div>
          </div>
        </div>
      </section>
     

     
    </main>
    <footer class="footer mt-50 pt-50">
      <div class="container">
        <div class="row">
          <div class="footer-col-1 col-md-3 col-sm-12">
          <h1>&nbsp;</h1>
            <!-- <a href="{{route('welcome')}}">
            <img alt="Achievers Recruitment Limited" src="{{asset('imgs/template/achievers-logo.jpg')}}"></a> -->

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
            <div class="col-md-6"><a class="font-xs color-text-paragraph">Copyright &copy; {{\Carbon\Carbon::now()->format('Y')}}. {{env('app_name')}}</a></div>
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