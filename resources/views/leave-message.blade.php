<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/stylecd4e.css?version=4.1')}}" rel="stylesheet">
    <title>{{env('app_name')}} :New Message </title>
  </head>
  <body>
    <main class="main">
      <section class="section-box mt-40">
        <div class="container">
          <div class="row">
                    
            <div class="col-lg-8 mb-40">
                  <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                @csrf
                <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="name"  type="text" value="{{$name}}">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="company"  type="text" value="{{$company}}">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="email"  type="email" value="{{$email}}">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-style mb-20">
                      <input class="font-sm color-text-paragraph-2" name="phone" type="tel" value="{{$phone}}">
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="textarea-style mb-30">
                      <textarea class="font-sm color-text-paragraph-2" name="message" >{{$content}}</textarea>
                    </div>
                   </div>
                </div>
              </form>            
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/main8c94.js?v=4.1')}}"></script>
  </body>
</html>