@extends('layouts.layout')


@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/crowd.css') }}">
<style>
   .header-txt {
     background-image: url(../images/crowd.png);
     background-size: cover;
     height: 650px;
}</style>

@endsection

@section('body')
   <!-- color box-->
   <div id="sideBar" class="clearfix ">
      <div class="color-box">
         <h4>Change Color</h4>
         <div class="color-item"></div>
         <div class="color-item"></div>
         <div class="color-item"></div>
         <div class="color-item"></div>
         <div class="color-item"></div>
      </div>
      <i  id="sideBarToggle" class="fas fa-cog text-white"></i>
   </div>
   <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
   <!-- <div data-aos="fade-down" id="hero-crowd" class="text-center">
      <div class="slogan ">
         Join The Crowd
      </div>
      </div> -->

      <div  data-aos="fade-up" class="container-fluid text-light text-center font-weight-bold header-txt h1 px-0">
          <span style=" display: block; margin: auto; height: 650px; padding-top: 300px; color: var(--white); 
          font-family:'viga'; font-size:70px;" id="overlay"> 
          Join The Crowd</span>
     </div>
   <!-- First Section:"Nav bar"-->
   <!-- startups-->
   <div class="startups">
      <div class="str-left "data-aos="fade-down">
      <h1>Startups Exhibithin</h1>
      <p>
         A two-day exhibition for startups on its different
         stages to show what services and solutions they’re
            offering and how they can apply this in Upper
            Egypt,Ended with a pitching competition to pick
            the best startup
      </p>
      <a href="{{ route('apply_startup') }}">Apply As A Startup</a>
      </div>
      <div class="str-right" data-aos="fade-up">
      <img src="./images/startups.jpg" alt="">
      </div>
   </div>
   <!-- Pitching Competition-->
   <div class="startups">
      <div class="str-right" data-aos="fade-down">
      <img src="./images/pitching.jpg" alt="">
      </div>
      <div class="str-left"data-aos="fade-up">
      <h1>Pitching Competition</h1>
      <p>
         Among the exhibitors, 10 startups will be selected
         to pitch their idea on the main stage. the Pitching
         will give a five minutes to each startup to let the Attendees
         and the judges a brief about thir idea.
         then a jurey of judges will select the best statup
         to get a 50K-Equity free grant from Innovation Day.
      </p>
      <a href="{{ route('apply_startup') }}">Apply As A Startup</a>
      </div>
   </div>
   <!-- sponsors-->
  
      <section class="partners"style="background-color:#fff; margin-bottom:0;">
      <section class="partners partners-2"style="background-color:#fff;margin-bottom:0;">
      <div class="container-fluid text-center justify-content-center mx-auto">
      <h2 style="font-family:'viga'; color:var(--blue);" data-aos="fade-down">
         Meet Our <span class="font-weight-bold mb-4"style="color:#e8465a;">Sponsors</span>
      </h2>
   </section>
      <section class="partners" data-aos="fade-up">
      <div class="container-fluid text-center justify-content-center mx-auto">
      <div class="partners-grid container">
         <div>
            <a href="#">
            <img src="./images/GIZ - EU transparent@3x.png" alt="wuzzuf logo" width="200px">
            </a>
         </div>
         <div >
            <a href="#">
            <img src="./images/angels.jpg" alt="nokia logo" max-width="170px"   >
            </a>
         </div>
         <div >
            <a href="#">
            <img src="./images/nokia.png" alt="nokia logo" max-width="170px" >
            </a>
         </div>
         <div  >
            <a href="#">
            <img src="./images/mall.jpg" alt="el-nikhily logo" width="170px" >
            </a>
      </div>
      </div>
      </div>
      <br>
   </section>
   <!-- Partners-->
   <section class="partners"style="background-color:#fff; margin-top:0;">
   <div class="container-fluid text-center justify-content-center mx-auto">
      <h2 style="font-family:'viga'; color:var(--blue);" data-aos="fade-down">
      Meet Our <span class="font-weight-bold mb-4"style="color:#e8465a;">Partners</span>
      </h2>
      <br> <br>
      <div class="partners-grid container" data-aos="fade-up">
      <div>
         <a href="#">
            <img src="./images/wuzzuf.png" alt="wuzzuf logo" width="170px">
         </a>
      </div>
      <div >
         <a href="#">
            <img src="./images/forasna.png" alt="nokia logo" max-width="170px"   >
         </a>
      </div>
      <div >
         <a href="#">
            <img src="./images/cloud.jpg" alt="nokia logo" max-width="170px" >
         </a>
      </div>
      <div  >
         <a href="#">
            <img src="./images/mall.jpg" alt="el-nikhily logo" width="170px" >
         </a>
      </div>
      <div >
         <a href="#">
            <img src="./images/fabrigate.png" alt="nokia logo" max-width="170px" >
         </a>
      </div>
         <div>
            <a href="#">
            <img src="./images/angels.jpg" alt="the cairo angels logo" width="170px">
            </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/nokia.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/Nile Angels logo (1).jpg" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/sherketak.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/mega.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/ibm.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/galaxy.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/iti.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/tiec-2.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/Careerk-logo - rania esmael.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/gdg.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/logosvu.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/tiec.jpeg" alt="nokia logo" width="130px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/capsula.png" alt="nokia logo" width="130px" >
      </a>
      </div>
      </div>
   </div>
   <div class="buttons" >
      <div id="apply">
      <a href="{{ route('apply_partner') }}" class="btn align-self-center mx-5" >Apply As A Partner</a>
      </div>
   </div>
   <br>
   </section>
   <!-- Employment Partners-->
   <section class="partners"style="background-color:#fff;">
   <div class="container-fluid text-center justify-content-center mx-auto">
      <h2 style="font-family:'viga'; color:var(--blue);"data-aos="fade-down">
      Meet Our <span class="font-weight-bold mb-4"style="color:#e8465a;">Employment Partners</span>
      </h2> 
      <br> <br>
      <div class="partners-grid container" data-aos="fade-up">
      <div>
      <a href="#">
         <img src="./images/payme.png" alt="wuzzuf logo" width="170px">
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/presto.png" alt="nokia logo" max-width="170px"   >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/skn.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div  >
      <a href="#">
         <img src="./images/wuilt.png" alt="el-nikhily logo" width="170px" >
      </a>
   </div>
      <div >
      <a href="#">
         <img src="./images/hovo.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div>
         <a href="#">
            <img src="./images/gatjed.png" alt="the cairo angels logo" width="170px">
         </a>
      </div>
   <div >
      <a href="#">
      <img src="./images/afqar.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/agora.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/friends.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/piller.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/acid.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/tele.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/suez.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/abnormal.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/aresco.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/fapp.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/devaz.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/esaco.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
   <div >
      <a href="#">
      <img src="./images/wonder.png" alt="nokia logo" max-width="170px" >
      </a>
   </div>
      </div>
   </div>
   <div class="buttons" data-aos="fade-down">
      <div id="apply">
      <a href="{{ route('apply_partner') }}" class="btn align-self-center mx-5" >Apply As A Partner</a>
      </div>
   </div>
   <br>
   </section>
@endsection


@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>

@endsection