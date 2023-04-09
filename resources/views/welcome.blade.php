<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/stylecd4e.css?version=4.1')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic'>
    <style>

          .btn {
            display: inline-block;
            padding: 13px 20px;
            color: #fff;
            text-decoration: none;
            position: relative;
            background: transparent;
            border: 1px solid #e1e1e1;
            font: 12px/1.2 "Oswald", sans-serif;
            letter-spacing: 0.4em;
            text-align: center;
            text-indent: 2px;
            text-transform: uppercase;
            transition: color 0.1s linear 0.05s;
          }
          .btn::before {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background: #e1e1e1;
            z-index: 1;
            opacity: 0;
            transition: height 0.2s ease, top 0.2s ease, opacity 0s linear 0.2s;
          }
          /* .btn::after {
            transition: border 0.1s linear 0.05s;
          }
          .btn .btn-inner {
            position: relative;
            z-index: 2;
          }
          .btn:hover {
            color: #373737;
            transition: color 0.1s linear 0s;
          }
          .btn:hover::before {
            top: 0;
            height: 100%;
            opacity: 1;
            transition: height 0.2s ease, top 0.2s ease, opacity 0s linear 0s;
          }
          .btn:hover::after {
            border-color: #373737;
            transition: border 0.1s linear 0s;
          } */

          .slideshow {
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 75vh;
            z-index: 1;
          }
          .slideshow .slideshow-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
          }
          .slideshow .slides {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
          }
          .slideshow .slide {
            display: none;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            /* opacity: 0;
            transition: opacity 0.3s ease; */
          }
          .slideshow .slide.is-active {
            display: block;
          }
          .slideshow .slide.is-loaded {
            opacity: 1;
          }
          .slideshow .slide .caption {
            padding: 0 100px;
          }
          .slideshow .slide .image-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            z-index: 1;
            background-size: cover;
            image-rendering: optimizeQuality;
          }
          .slideshow .slide .image-container::before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0, 0, 0, 0.5); */
          }
          .slideshow .slide .image {
            width: 100%;
            width: 100%;
            object-fit: cover;
            height: 100%;
          }
          .slideshow .slide-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:150px
          }
          .slideshow .slide .title {
            margin: 50 auto 15px;
            max-width: 1000px;
            font: 300 50px/1.2 "Oswald", sans-serif;
            letter-spacing: 0.35em;
            text-transform: uppercase;
          }
          .slideshow .slide .text {
            margin: 0 auto;
            max-width: 1000px;
            font-size: 18px;
            line-height: 1.4;
          }
          .slideshow .slide .btn {
            margin: 15px 0 0;
            border-color: #fff;
          }
          .slideshow .slide .btn::before {
            background: #fff;
          }
          .slideshow .pagination {
            position: absolute;
            bottom: 35px;
            left: 0;
            width: 100%;
            height: 12px;
            cursor: default;
            z-index: 2;
            text-align: center;
            justify-content: center;
          }
          .slideshow .pagination .item {
            display: inline-block;
            padding: 15px 5px;
            position: relative;
            width: 46px;
            height: 32px;
            cursor: pointer;
            text-indent: -999em;
            z-index: 1;
          }
          .slideshow .pagination .item + .page {
            margin-left: -2px;
          }
          .slideshow .pagination .item::before {
            content: "";
            display: block;
            position: absolute;
            top: 15px;
            left: 5px;
            width: 36px;
            height: 2px;
            background: rgba(255, 255, 255, 0.5);
            transition: background 0.2s ease;
          }
          .slideshow .pagination .item::after {
            width: 0;
            background: #fff;
            z-index: 2;
            transition: width 0.2s ease;
          }
          .slideshow .pagination .item:hover::before, .slideshow .pagination .item.is-active::before {
            background-color: #fff;
          }
          .slideshow .arrows .arrow {
            margin: -33px 0 0;
            padding: 20px;
            position: absolute;
            top: 50%;
            cursor: pointer;
            z-index: 3;
          }
          .slideshow .arrows .prev {
            left: 30px;
          }
          .slideshow .arrows .prev:hover .svg {
            left: -10px;
          }
          .slideshow .arrows .next {
            right: 30px;
          }
          .slideshow .arrows .next:hover .svg {
            left: 10px;
          }
          .slideshow .arrows .svg {
            position: relative;
            left: 0;
            width: 14px;
            height: 26px;
            fill: #fff;
            transition: left 0.2s ease;
          }
      </style>
    <title>{{env('app_name')}} :Home </title>
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
                <li><a class="active"  href="{{route('welcome')}}">Home</a></li>                
                <li ><a  href="{{route('clients')}}">Clients</a></li>
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
    <section class="slideshow section-box">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Welcome to Achievers Recruitment Limited</div>
              <!-- <div class="text">
                <p>Slide description 1</p>
              </div>  -->
            <a href="{{route('register')}}" class="btn">
                <span class="btn-inner">Join Us</span>
              </a> 
            </div>
          </div>
          <div class="image-container"> 
            <img src="{{asset('imgs/page/homepage2.png')}}" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title"></div>
              <!-- <div class="text">
                <p>Slide description 2</p>
              </div> 
           
              <a href="#" class="btn">
                <span class="btn-inner"></span>
              </a>
                  -->
            </div>
          </div>
          <div class="image-container">
            <img src="{{asset('imgs/page/homepage4.jpg')}}" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title"></div>
              <!-- <div class="text">
                <p>Slide description 3</p>
              </div>  -->
              <!-- <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container">
            <img src="{{asset('imgs/page/homepage5.jpg')}}" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title"></div>
              <!-- <div class="text">
                <p>Slide description 4</p>
              </div> 
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a> -->
            </div>
          </div>
          <div class="image-container"> 
            <img src="{{asset('imgs/page/homepage4.jpg')}}" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="pagination">
        <div class="item is-active"> 
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
        <div class="item">
          <span class="icon">4</span>
        </div>
      </div>
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div> 
  </section>
  <section class="section-box mt-0 mb-10 bg-border-3 pt-50 pb-50">
        <div class="container">
          <div class="row">
           
            <div class="col-lg-6">
              <div class="pl-30">
                <h5 class="color-brand-2 mb-15 mt-15">Welcome to</h5>
                <h2 class="color-brand-1 mt-0 mb-15">Achievers Recruitment Limited</h2>
                <p class="font-lg color-text-paragraph-2">
                Achievers Recruitment is a recruitment agency specialising in recruiting and supplying highly trained nurses and healthcare assistants on a temporary basis. 
        </p><br>
        <p  class="font-lg color-text-paragraph-2">This is done in nursing homes, residential homes, and private hospitals across the United Kingdom. 
              </p><br>
              <p  class="font-lg color-text-paragraph-2">
              We prioritise in ensuring our staff are trained to share the value of providing person-centred care to our client. 
                </p><br>
              </div>
            </div>
            <div class="col-lg-6"><img class="bdrd-10" src="{{asset('imgs/page/whoweare.jpg')}}" alt="Achievers Recruitment Limited"></div>
          </div>
        </div>
      </section>   
      <section id="gettingStarted" class="section-box mt-40 mb-40">
        <div class="container">
          <div class="text-start">
            <h2  class="section-title mb-10 wow animate__animated animate__fadeInUp text-center">How It Works</h2>
          </div>
          <div class="mt-70"> 
            <div class="row"> 
              <div class="col-lg-4">
                <div class="box-step step-1">
                  <h1 class="number-element">1</h1>
                  <h4 class="mb-20">Submit your CV/Resume<br class="d-none d-lg-block"> to start</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step step-2">
                  <h1 class="number-element">2</h1>
                  <h4 class="mb-20">Information <br class="d-none d-lg-block">verification</h4>
                 </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step">
                  <h1 class="number-element">3</h1>
                  <h4 class="mb-20">Get connected <br class="d-none d-lg-block">to recruiters</h4>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </section>
      <section class="section-box mt-50 mb-0 bg-border-3 pt-100 pb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6"><img class="bdrd-10" src="{{asset('imgs/page/homepage6.jpg')}}" alt="Achievers Recruitment Limited"></div>
            <div class="col-lg-6">
              <div class="pl-30">
                <h5 class="color-brand-2 mb-15 mt-15">Submit CV/Resume</h5>
                <h2 class="color-brand-1 mt-0 mb-15">Submit your resume to get started</h2>
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
              
                <div class="mt-20"><a class="btn btn-default" href="{{route('register')}}">Upload CV/Resume</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
    <footer class="footer pt-50">
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
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/isotope.js')}}"></script>
    <script src="{{asset('js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('js/plugins/counterup.js')}}"></script>
    <script src="{{asset('js/main8c94.js?v=4.1')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>

    
    <script>

var slideshowDuration = 4000;
var slideshow=$('.main .slideshow');

function slideshowSwitch(slideshow,index,auto){
  if(slideshow.data('wait')) return;

  var slides = slideshow.find('.slide');
  var pages = slideshow.find('.pagination');
  var activeSlide = slides.filter('.is-active');
  var activeSlideImage = activeSlide.find('.image-container');
  var newSlide = slides.eq(index);
  var newSlideImage = newSlide.find('.image-container');
  var newSlideContent = newSlide.find('.slide-content');
  var newSlideElements=newSlide.find('.caption > *');
  if(newSlide.is(activeSlide))return;

  newSlide.addClass('is-new');
  var timeout=slideshow.data('timeout');
  clearTimeout(timeout);
  slideshow.data('wait',true);
  var transition=slideshow.attr('data-transition');
  if(transition=='fade'){
    newSlide.css({
      display:'block',
      zIndex:2
    });
    newSlideImage.css({
      opacity:0
    });

    TweenMax.to(newSlideImage,1,{
      alpha:1,
      onComplete:function(){
        newSlide.addClass('is-active').removeClass('is-new');
        activeSlide.removeClass('is-active');
        newSlide.css({display:'',zIndex:''});
        newSlideImage.css({opacity:''});
        slideshow.find('.pagination').trigger('check');
        slideshow.data('wait',false);
        if(auto){
          timeout=setTimeout(function(){
            slideshowNext(slideshow,false,true);
          },slideshowDuration);
          slideshow.data('timeout',timeout);}}});
  } else {
    if(newSlide.index()>activeSlide.index()){
      var newSlideRight=0;
      var newSlideLeft='auto';
      var newSlideImageRight=-slideshow.width()/8;
      var newSlideImageLeft='auto';
      var newSlideImageToRight=0;
      var newSlideImageToLeft='auto';
      var newSlideContentLeft='auto';
      var newSlideContentRight=0;
      var activeSlideImageLeft=-slideshow.width()/4;
    } else {
      var newSlideRight='';
      var newSlideLeft=0;
      var newSlideImageRight='auto';
      var newSlideImageLeft=-slideshow.width()/8;
      var newSlideImageToRight='';
      var newSlideImageToLeft=0;
      var newSlideContentLeft=0;
      var newSlideContentRight='auto';
      var activeSlideImageLeft=slideshow.width()/4;
    }

    newSlide.css({
      display:'block',
      width:0,
      right:newSlideRight,
      left:newSlideLeft
      ,zIndex:2
    });

    newSlideImage.css({
      width:slideshow.width(),
      right:newSlideImageRight,
      left:newSlideImageLeft
    });

    newSlideContent.css({
      width:slideshow.width(),
      left:newSlideContentLeft,
      right:newSlideContentRight
    });

    activeSlideImage.css({
      left:0
    });

    TweenMax.set(newSlideElements,{y:20,force3D:true});
    TweenMax.to(activeSlideImage,1,{
      left:activeSlideImageLeft,
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlide,1,{
      width:slideshow.width(),
      ease:Power3.easeInOut
    });

    TweenMax.to(newSlideImage,1,{
      right:newSlideImageToRight,
      left:newSlideImageToLeft,
      ease:Power3.easeInOut
    });

    TweenMax.staggerFromTo(newSlideElements,0.8,{alpha:0,y:60},{alpha:1,y:0,ease:Power3.easeOut,force3D:true,delay:0.6},0.1,function(){
      newSlide.addClass('is-active').removeClass('is-new');
      activeSlide.removeClass('is-active');
      newSlide.css({
        display:'',
        width:'',
        left:'',
        zIndex:''
      });

      newSlideImage.css({
        width:'',
        right:'',
        left:''
      });

      newSlideContent.css({
        width:'',
        left:''
      });

      newSlideElements.css({
        opacity:'',
        transform:''
      });

      activeSlideImage.css({
        left:''
      });

      slideshow.find('.pagination').trigger('check');
      slideshow.data('wait',false);
      if(auto){
        timeout=setTimeout(function(){
          slideshowNext(slideshow,false,true);
        },slideshowDuration);
        slideshow.data('timeout',timeout);
      }
    });
  }
}

function slideshowNext(slideshow,previous,auto){
  var slides=slideshow.find('.slide');
  var activeSlide=slides.filter('.is-active');
  var newSlide=null;
  if(previous){
    newSlide=activeSlide.prev('.slide');
    if(newSlide.length === 0) {
      newSlide=slides.last();
    }
  } else {
    newSlide=activeSlide.next('.slide');
    if(newSlide.length==0)
      newSlide=slides.filter('.slide').first();
  }

  slideshowSwitch(slideshow,newSlide.index(),auto);
}

function homeSlideshowParallax(){
  var scrollTop=$(window).scrollTop();
  if(scrollTop>windowHeight) return;
  var inner=slideshow.find('.slideshow-inner');
  var newHeight=windowHeight-(scrollTop/2);
  var newTop=scrollTop*0.8;

  inner.css({
    transform:'translateY('+newTop+'px)',height:newHeight
  });
}

$(document).ready(function() {
 $('.slide').addClass('is-loaded');

 $('.slideshow .arrows .arrow').on('click',function(){
  slideshowNext($(this).closest('.slideshow'),$(this).hasClass('prev'));
});

 $('.slideshow .pagination .item').on('click',function(){
  slideshowSwitch($(this).closest('.slideshow'),$(this).index());
});

 $('.slideshow .pagination').on('check',function(){
  var slideshow=$(this).closest('.slideshow');
  var pages=$(this).find('.item');
  var index=slideshow.find('.slides .is-active').index();
  pages.removeClass('is-active');
  pages.eq(index).addClass('is-active');
});

/* Lazyloading
$('.slideshow').each(function(){
  var slideshow=$(this);
  var images=slideshow.find('.image').not('.is-loaded');
  images.on('loaded',function(){
    var image=$(this);
    var slide=image.closest('.slide');
    slide.addClass('is-loaded');
  });
*/

var timeout=setTimeout(function(){
  slideshowNext(slideshow,false,true);
},slideshowDuration);

slideshow.data('timeout',timeout);
});

if($('.main-content .slideshow').length > 1) {
  $(window).on('scroll',homeSlideshowParallax);
}
    </script>
   
  </body>
</html>