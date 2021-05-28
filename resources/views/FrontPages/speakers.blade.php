@extends('layouts.layout')


@section('styles')
     <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/crowd.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/speakers.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/aos-master/dist/aos.css') }}">
     <style>
   .header-txt {
     background-image: url(../images/speaker.jpg);
     background-size: cover;
     height: 650px;
}</style>
@endsection

@section('body')
<div  data-aos="fade-up" class="container-fluid text-light text-center font-weight-bold header-txt h1 px-0">
          <span style=" display: block; margin: auto; height: 650px; padding-top: 300px; color: var(--white); 
          font-family:'viga'; font-size:70px;" id="overlay"> 
          Meet Our Speakers</span>
     </div>
   <!--  <div id="hero-speaker" >
        <div class="slogan-speaker" >
        ID Speakers
        </div>
        <div id="count">
        </div>
    </div> -->

    <!-- section speakers  -->
    <section class="py-2" id="speakers" >
    <div class="container-fluid" data-aos="fade-up">
    <div class="row">

        <div class=" col-lg-6 col-md-6 spimages"  >
            <div class="img-contant position-relative">
                <img src="images/speakers.png" class="img-fluid">
                <div class="img-overlay">
                    </div>
                </div>
            </div>


        <div class="col-lg-6 col-md-6 spcontents" >
            <div class="contant py-3">
                <h3 style="color:#e8465a; font-family:'viga' black; font-weight:500;">BE PART OF OUR STORY:<br> SPEAK AT RISEUP</h3>
                <p style="color:white;margin-bottom:20px;">You no longer need to fly across the globe to connect with the MENA ecosystem at RiseUp Summit! Thought leaders, media mavens, tech-legends and power player investors gather to share their experience and lend support for the Middle East and Africa’s flourishing startup scene. This year, our speakers get to share their wisdom and tell their story from the comfort of their own home.</p>

            </div>
        </div>

    </div>
    </div>
    </div>
    </section>


    <!-- speakers images and about -->
    <section class="py-5"  style="background-color:#101d3d;">
    <div class="container-fluid text-center">
        <h2 class="text-uppercase" >Meet Innovation Day'8 <span style="color:#e8465a"> Speakers</span></h2>

    </div>



    <div class="container-fluid">
        <div class="row">
@foreach($speakers as $speaker)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="content1-img position-relative" style="width:260px;">
                    <a href="{{ route('popup.show', $speaker) }}"><img src="{{asset("uploads/$speaker->image_upload")}}" class="img-item" style="width:260px;"></a>
                    <div class="img-overlay1" style="width:260px;">
                    </div>
                </div>
                    <div class="content1  bottom-left position-absolute">
                        <h3 >{{$speaker->fullname}}</h3>
                        <p>{{$speaker->jobtittle}}</p>


                    </div>

            </div>

          
        @endforeach
    </div>

    </div>
    </section>
     {{-- <!-- section pop up -->
     <div id="lightboxcontainer">

        <div id="lightboxitem">
              <div class="container">
        <div class="row">
            <div class=" col-lg-4 col-md-12">
                <div id="aboutimage">
                </div>
            </div>
                    <div class="col-lg-8 col-md-12 ">
                       <h4 style="color:#2162af;">Ahmed adel</h4>
                       <p style="color: #362d58;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi eveniet pariatur et tempora, cumque fugit, ea ratione quo architecto ex molestias facere autem. Harum, tempora? Amet, sapiente iure. Et aspernatur tempora, cum placeat perferendis quo totam laudantium possimus distinctio cupiditate.</p>
                 </div>

          <i id="iconclose" onclick="closeLightBox();" class="far fa-times-circle" style="color: #254d9f; cursor: pointer;"></i>

        </div>
    </div>
    </div>
</div> --}}

@endsection


@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/index.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/speakers.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>

@endsection