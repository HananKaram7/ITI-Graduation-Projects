@extends('layouts.layout')


@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('css/hackathon.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/crowd.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
   <style>
   .header-txt {
     background-image: url(../images/contact.jpg);
     background-size: cover;
     height: 650px;
}</style>

@endsection

@section('body')
<div  data-aos="fade-up" class="container-fluid text-light text-center font-weight-bold header-txt h1 px-0">
          <span style=" display: block; margin: auto; height: 650px; padding-top: 300px; color: var(--red); 
          font-family:'viga'; font-size:70px;" id="overlay"> 
          About Innovation Day </span>
     </div>
<!-- <div data-aos="fade-down" id="hero-about" class="text-center">
      <div class="slogan-about ">
         About Innovation Day
      </div>
      </div> -->
     <div class="container-fluid py-5">
          <div class="container ">
              
               <div class=" mb-3" style="color: var(--red); font-family:'viga'; font-size:70px;" data-aos="fade-up">
                    Who we are
               </div>
               <div class=" mb-5 font-weight-light text-light" style="font-family: 'Arimo';" data-aos="fade-down">
               Innovation Day is the first technological and entrepreneurial event held in 
               Upper Egypt since 2012.
               We aim to upgrade youth in Upper Egypt academically and practically in the 
               field of technology, business, design, and habitability for Innovation and 
               Entrepreneurship for the Renaissance of the community through various 
               activities.
               </div>

               <div class="h1 mb-3"style="color: var(--red); font-family:'viga'; font-size:70px; data-aos="fade-up">
                    What we do
               </div>
               <p class=" mb-5 font-weight-light text-light" style="font-family: 'Arimo';" data-aos="fade-down">
               A Series Of Integrated Hackathons From Idea To MVP To Product, 
               A Three Days Of Providing All Facilities To The Attendees Also Providing
                Mentors, Workshops And Sessions. Innovation Day Hackathon Is A Unique Event 
                Style That Provide The Value Of Awareness Of Technology To The Mass And Also 
                To Raise The Awareness Of Entrepreneurship To Help To Launch Startups And Help 
                Motivated Youth To Start Their Own Businesses, We Have Skilled And Talented 
                Youth And It’s Our Time To Motivate And Lead Them To Make Their Ideas Come True. Also The Hackathon Is A Great Opportunity For Ideation And Finding Innovative Solutions For Community Problems. The Final Day Is A One Day Event With All Activities Of 10 Talks In Business Technology And Design Featuring The New Technologies And Opportunities, Panel Discussions About Investment Opportunities In Upper Egypt, Startup Exhibition For 40 Startups From Upper Egypt, And Startup Pitching Competition For The Best 10 Startups
               </div>
          </div>
     </div>


     <div class="container-fluid text-center bg-light">
          <div class="container" style="padding-right: 0px; padding-left: 0px;">
               <div class=" row">
                    <div class="col-12 h1 mb-5 text-center mt-5" style="color: var(--red); font-family:'viga'; font-size:70px; data-aos="fade-up">
                         OUR TEAM
                    </div>

                    <div class="col-lg-4 col-sm-12 mb-5 text-light text-center" data-aos="fade-down">
                         <img class="hov" src="./images/mahmoud halim.jpg"
                              style="width: 100%; border: 2px var(--red) solid; border-radius: 20px;">
                         <div class="mt-3 h3" style="color: var(--red);">Mahmoud Halim</div>
                         <div style="color: var(--dark-blue);">Managing Director</div>
                    </div>

                    <div class="col-lg-4 col-sm-12 mb-5 text-light text-center" data-aos="fade-up">
                         <img class="hov" src="./images/ali s3d.jpg"
                              style="width: 100%; border: 2px var(--red) solid; border-radius: 20px;">
                         <div class="mt-3 h3" style="color: var(--red);">Ali Saad</div>
                         <div style="color: var(--dark-blue);">Tech Lead</div>
                    </div>

                    <div class="col-lg-4 col-sm-12 mb-5 text-light text-center" data-aos="fade-down">
                         <img class="hov" src="./images/amira amin.jpg"
                              style="width: 100%; border: 2px var(--red) solid; border-radius: 20px;">
                         <div class="mt-3 h3" style="color: var(--red);">Amira Amin</div>
                         <div style="color: var(--dark-blue);">Creative Lead</div>
                    </div>
               </div>
          </div>
     </div>



@endsection

@section('scripts')


<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>

@endsection


