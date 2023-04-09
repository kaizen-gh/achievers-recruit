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
    <title>{{env('app_name')}} :Candidates </title>
    <style>

.bg-img-about {
    background: url(../imgs/page/homepage5banner.jpg) no-repeat center;
    height:450px !important;
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
                <li ><a  href="{{route('clients')}}">Clients</a></li>
                <li ><a class="active" href="{{route('candidates')}}">Candidates</a></li>
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
            @if(auth()->user())         
                <li><a href="{{route('dashboard')}}">Profile</a></li>                             
                <li><a href="page-signin.html">Sign Out</a></li>             
            @else
            <li><a href="{{route('register')}}">Register</a></li>                             
                <li><a href="{{route('login')}}">Sign In</a></li>
            @endif
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
                <h2 class="mb-10">Candidates</h2>
                <p class="font-lg color-text-paragraph-2"></p>
              </div>
              <div class="col-lg-6 text-lg-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class="home-icon" href="{{route('welcome')}}">Home</a></li>
                  <li>Candidates</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="post-loop-grid">
          <div class="container">
            <div class="text-center">
              <h6 class="f-18 color-text-mutted text-uppercase">Candidates</h6>
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Information to Candidates</h2>
              <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto">&nbsp; </p>
            </div>
            <div class="row">
            
            </div>
            <div class="row mt-70">
              <div class="col-lg-5 col-md-12 col-sm-12"><img src="{{asset('imgs/page/homepage1.jpg')}}" alt="{{env('app_name')}}"></div>
              <div class="col-lg-7 col-md-12 col-sm-12">
                <!-- <h3 class="mt-15">What we do</h3> -->
                <div class="mt-0">

                <h6 >Candidates:</h6>
                <p class="font-md color-text-paragraph ">
                  Our staff are at the heart of our business, so all our staff are carefully selected and vetted to ensure that they share our vision and values as a company. We recruit nurses and health care assistants in Buckinghamshire, Northamptonshire, and Bedfordshire and beyond.
                    We have a wide range of benefits available for our staff.
                </p>
                <h6 class="mt-20">Staff Benefits:</h6>
                <ul class="ml-20"style="list-style-type:circle;font-weight:100">
                  <li>Flexible working hours - day and night shifts available</li>
                  <li>Competitive hourly rate</li>
                  <li>Free uniform and badge</li>
                  <li>Weekly payment</li>
                  <li>Friendly and supportive management team available 24hrs.</li>
                  <li>Different options available for staff to submit payment, email, screenshot and message across or post, whichever option is most convenient for our staff</li>
                  <li>Free mandatory training and induction</li>
                  <li>Progression plan for staff after probation and etc.</li>
                </ul>
              <!-- <p class="font-md color-text-paragraph ">
              Achievers Recruitment is a recruitment agency specialising in recruiting and supplying highly trained nurses and healthcare assistants on a temporary basis. 
              This is done in nursing homes, residential homes, and private hospitals across the United Kingdom. 
              We prioritise in ensuring our staff are trained to share the value of providing person-centred care to our client. 
              </p>
              <p class="font-md color-text-paragraph mt-20">
                      We recruit highly skilled nursing staff at Achievers Recruitment Ltd. 
                    </p>
                    <p class="font-md color-text-paragraph mt-20">Our company values our staff and supports their professional development. 
                      You can trust our dedicated team to find the right role for you. 
                    </p>
                    <p class="font-md color-text-paragraph mt-20">
                      For RGNs, RMNs, RNLDs, Care Assistants and Support Workers looking for flexible hours. 
                      If you are searching for a temporary position, using our expert recruitment consultants will make your journey seamless and effortless. 
                      Request an application from our friendly recruitment team.
                    </p>
                 <p class="font-md color-text-paragraph mt-20">To ensure that our staff are well-equipped with the necessary skills and knowledge, we have put in place comprehensive recruitment processes, including comprehensive background and reference checks. </p>
                <p class="font-md color-text-paragraph mt-20">We also provide extensive training courses to ensure that our staff are up to date with the latest standards and practices in the industry. Furthermore, we conduct regular assessments to evaluate the efficacy of our staff's skills and knowledge, and we provide continuous feedback and training to ensure that our staff are always providing the highest quality of care.
               We are also constantly innovating our training programmes to ensure that our staff are kept up to date with the latest advances in the 
              </p> -->

                </div>

              
              </div>
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