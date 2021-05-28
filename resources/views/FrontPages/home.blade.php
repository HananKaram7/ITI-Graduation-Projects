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
   <div id="hero">
      <div class="slogan" data-aos="fade-up">
         Where Impact Rises
      </div>
      <div class="register">
      <a href="{{ route('apply_attendee')}}" data-aos="fade-down">Get Your Ticket</a>
      </div>
      <div id="count" data-aos="fade-up">
      </div>
   </div>
   <!-- second section//Activities-->
   <div class="grid-2">
      <div class="left" data-aos="fade-down">
      <h1>Massive <br>
         Experience <br>
         IS Here NOW!
      </h1>
      </div>
      <div class="right" data-aos="fade-up">
      <h2 class="mb-2 mx-auto" style="font-family:'viga'; text-align:center; color:var(--white);">Join Innovation Day Crowd Now!
         <br>
         <span class="" style="color:var(--red); font-family: 'viga';text-align:center">Book Your Ticket</span>
      </h2>
      <div class="row" data-aos="fade-up">
      <div class="item-1">
      <h3>
         Early Bird
      </h3>
      <img src="./images/bird.png" alt="Early bird tickets" width="100px;">
      <p>
         Open Till 15/9/2021
         <br>
         <span class="font-weight-bold">50 EGP</span>
      </p>
      <a href="#" class="btn btn-blue ">Buy Now!</a>
      </div>
      <div class="item-2">
         <h3>
            Regular
         </h3>
         <img src="./images/owl.png" alt="Regular tickets" width="100px;">
         <p>
            End in 3/10/2021
            <br>
            <span class="font-weight-bold">70 EGP</span>
         </p>
         <a class="btn btn-blue disabled " href="https://forms.gle/66xcJyebPrhdve246" target="_blank">Buy Now!</a>
      </div >
      <div class="item-3">
         <h3>
            Late Owl
         </h3>
         <img src="./images/regular.png" alt="Late Owl Tickets" width="100px;">
         <p>
            Open in 4-5/10/2021
            <br>
            <span class="font-weight-bold">100 EGP</span>
         </p>
         <a class="btn btn-blue disabled" href="" target="_blank">Buy Now!</a>
      </div>
      </div>
      </div>
   </div>
   <!--activities section-->
   <div class="activities">
   <div class="left"data-aos="fade-up">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::asset('images/pitching.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('images/startups.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('images/hack.jpg')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('images/workshops.jpg')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('images/talks.jpg')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('images/panel.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   </div>
   <div class="right">
      <h1 data-aos="fade-down">
      Enjoy  <br>
      This Year's <br>
      ACTIVITIES
      </h1>
   </div>
   </div>
   <!-- speakers -->
   <section class="speakers">
      <div class="container-fluid text-center justify-content-center py-5 mx-auto">
      <h2>
         Meet Innovation Day'8 <span class="font-weight-bold mb-6"style="color:#e8465a;  font-family:'viga';">Speakers</span>
      </h2>
      <div class="row mx-auto mt-2" id="talks"data-aos="fade-up">
         <div class="cont">
            <img src="./images/khedr.png" alt="" class="img-pic" >
            <a href="#">
            Mohamed Hossam Khedr
            <br>
            <span>CEO At Internet Plus</span>
            </a>
      </div>
         <div class="cont" >
            <img src="./images/hegazy.png" alt="" class="img-pic">
            <a href="#">
            Muhammed Hegzy
            <br>
            <span>Investment Associate At Cairo  <br>Angels</span>
            </a>
         </div>
         <div class="cont">
            <img src="./images/waleed.png" alt="" class="img-pic">
            <a href="#">
            Waleed Elsafoury
            <br>
            <span>Founder At Mega Academy</span>
            </a>
         </div>
            <div class="cont">
            <img src="./images/amr.png" alt="" class="img-pic">
            <a href="#">
               Amr Al-Awamry
               <br>
               <span>Lecturer At Benha University</span>
            </a>
         </div>
            <div class="cont">
            <img src="./images/ehab.png" alt="" class="img-pic">
            <a href="#">
               Ehab EL Nezamy
               <br>
               <span>Head of Innovation Hubs At Nokia</span>
            </a>
         </div>
   </div>
      <div id="apply">
      <h2>Want To Gain More Knowledge!</h2>
      <a href="{{ route('speakersweb') }}" class="btn align-self-center mx-5" >View More...</a>
      </div>
   </div>
   </section>
   <!-- Partners-->
   <section class="partners partners-2" style="background-color:#fff;">
   <div class="container-fluid text-center justify-content-center mx-auto"data-aos="fade-down">
      <h2 style="font-family:'viga'; color:var(--blue);">
      Meet Our <span class="font-weight-bold mb-4"style="color:#e8465a;">Main Sponsor</span>
      </h2>
      <div>
      <a href="#">
         <img src="./images/GIZ - EU transparent@3x.png" alt="wuzzuf logo" width="500px">
      </a>
      </div>
      <br>
   </div>
   </section>
   <section class="partners" style="background-color:#fff;" data-aos="fade-up">
   <div class="container-fluid text-center justify-content-center mx-auto" data-aos="fade-up">
      <h2 style="font-family:'viga'; color:var(--blue);">
      Meet Our <span class="font-weight-bold mb-4"style="color:#e8465a;">Partners</span>
      </h2>
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
         <img src="./images/ibm.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      <div >
      <a href="#">
         <img src="./images/iti.png" alt="nokia logo" max-width="170px" >
      </a>
      </div>
      </div>
   </div>
   <div class="buttons">
      <div id="apply">
      </div>
      <div id="apply">
      <a href="{{ route('crowdweb') }}" class="btn align-self-center mx-5" >View More...</a>
      </div>
      <div id="apply">
      <a href="{{ route('apply_partner') }}" class="btn align-self-center mx-5" >Apply As A Partner</a>
      </div>
      <div id="apply">
      </div>
   </div>
   <br>
   </section>
@endsection


@section('scripts')
   <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
@endsection