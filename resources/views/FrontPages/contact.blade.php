@extends('layouts.layout')


@section('styles')
     <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/workshops.contact.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
@endsection

@section('body')
       <!-- contant of contact us -->
       <div class="container-fluid mb-5 mt-5">
        <div class="row">
          <div data-aos="fade-down" class="col-lg-6 col-md-12 col-sm-12 py-5 " >
            <div class="content px-5">
              <h2 style="color: #f1f1f1;" class="head py-3">
                <span style="color: #101d3d ; font-size: larger;">
                </span>Contact us</span>
              </h2>
              <p style="color:#f1f1f1;" class=" lead py-2">
              In order to develop our students knowledgable skills, we aim to provide them with a large variety of chosen activities to help them have a new experience.</p>
              <p style="color:#f1f1f1;" class=" lead py-2">
              Helping students in engineering and entrepreneurship to be highly qualified after graduation
              <br>
              Contact Us if you need any help
            </div>
          </div>
          <div data-aos="fade-up" class="col-lg-6 col-md-12 col-sm-12 py-5  " style="background-color:#e8465a;">
            <div class="row contact-info m-auto py-5 my-5 ">
              <div class="col-lg-4 col-md-4 col-sm-4 ">
                <div class="contact-address px-2 py-5">
                  <i style="color: #101d3d;" class="fas fa-map-marker-alt icon img-PORTFOLIO"></i>
                  <h3 class=" pt-3" style="color:#f1f1f1 !important;">Address</h3>
                  <p style="color:#f1f1f1;">A108 Adam Street</p>
                </div>
              </div>
  
              <div class="col-lg-4 col-md-4 col-sm-4 px-2 ">
                <div class="contact-phone py-5">
                  <i style="color: #101d3d;" class="fas fa-phone icon img-PORTFOLIO"></i>
                  <h3 class="pt-3" style="color:#f1f1f1 !important;">Phone </h3>
                  <p><a style="color:#f1f1f1 !important;" href="+0201007397235">+0201007397235</a></p>
                </div>
              </div>
  
              <div class="col-lg-4 col-md-4 col-sm-4 px-2 py-5">
                <div class="contact-email">
                  <i style="color: #101d3d" class="far fa-envelope icon img-PORTFOLIO"></i>
                  <h3 class="pt-3" style="color:#f1f1f1 !important;">Email</h3>
                  <p><a style="color:#f1f1f1 !important;" href="halim@innovationday.com">halim@innovationday.com</a></p>
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
      <!-- iframe -->
      <div id="if" class="container-fluid">
        <div data-aos="fade-up" class="  col-lg-12 col-md-12 col-sm-12 mb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14079.045095913947!2d30.762461721897147!3d28.092823874719812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b25b220c24dc1%3A0x7479dce390f24120!2z2YbYp9iv2Ykg2LbYqNin2Lcg2KfZhNmC2YjYp9iqINin2YTZhdiz2YTYrdipINio2KfZhNmF2YbZitin!5e0!3m2!1sen!2seg!4v1595990672065!5m2!1sen!2seg"
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <!-- form starting -->
      <div data-aos="fade-down" class="container py-3">
        <div class="form  col-lg-12 col-md-12 col-sm-12 mb-4 ">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-lg-6  col-md-12 col-sm-12">
                <label class="main text-white ">enter your full name:</label>
                <input id="nameInput" type="name" name="name" class="form-control rounded" placeholder=""
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  name is valid , please enter you name
                </div>
              </div>
              <div class="form-group col-lg-6 col-md-12 col-sm-12">
                <label class="main  text-white ">enter your e-mail:</label>
                <input id="emailInput" type="email" class="form-control rounded" name="email" placeholder=""
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                  e-mail is valid , please enter you mail
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label class="main   text-white">enter your number:</label>
                <input id="phoneNumInput" type="number" class="form-control rounded" name="subject" placeholder=""
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                  phone number is valid , please enter you number
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label class="main text-white">your massage:</label>
                <textarea class="form-control rounded" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="text-center my-2"><button class="bb rounded-top" type="submit" style="background-color: #e8465a;">Send Message</button></div>
          </form>
        </div>
  
      </div>   
         
        
        

@endsection


@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/main2.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>


@endsection