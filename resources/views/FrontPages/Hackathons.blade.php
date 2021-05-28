@extends('layouts.layout')


@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('css/hackathon.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
@endsection

@section('body')

     <div  data-aos="fade-up" class="container-fluid text-light text-center font-weight-bold header-txt h1 px-0">
          <span style=" display: block; margin: auto; height: 650px; padding-top: 300px; color: var(--white); font-family:'viga'; font-size:70px;" id="overlay"> Hack For 
               Upper Egypt </span>
     </div>

     <div   data-aos="fade-down" class="container text-light text-center" style="line-height: 1.5;">
          <div class="h2  pt-5" style="color: var(--red); font-family:'viga'; font-size:70px;"> innovation Day Hackathons</div>
          <div style="font-family:'Arimo';">
               Innovation Day Hackathon is a unique event style that provide the value of awareness of technology to the
               mass, and also to raise the awareness of entrepreneurship to help to launch startups, and help motivated
               youth to start their own businesses, We have skilled and talented youth and it’s time to motivate and
               lead them to make their ideas come true. Also the hackathon is a great opportunity for ideation and
               finding innovative solutions for community problems.
          </div>
     </div>

     <div  data-aos="fade-up" class="container-fluid text-light mt-5">
          <div class="text-center mb-1 " style="color:var(--red); font-size: 60px;">FIRST STAGE</div>
          <div   data-aos="fade-down"class="text-center mb-5 container" style="font-family:'Arimo'; width: 60%;">
               fist stage will take place at three different places in three cities for three days and the qualified
               teams will go throught final competetion to win the grand prize
          </div>
          <div  data-aos="fade-down" class="row" style="border-top: 0.1px white solid;">
               <div class="col-lg-6 col-sm-12 text-center px-3" style="display: block; margin: auto;">
                    <div  data-aos="fade-up" class="text-uppercase font-wei" style="color: var(--red); font-size: 60px;"> Minya</div>
                    <div style="font-family:'Arimo';">The goal of a hackathon is to create functioning software or hardware by the end of the event.
                     Hackathons tend to have a specific focus, which can include the programming language 
                     used, the operating system, an application, an API, or the subject and the demographic 
                     group of the programmers. In other cases, there is no restriction on the type of software 
                     being created.</div>
                    <button class="btn py-4"><a href="{{ route('apply_hackathon') }}" class="btn color-white py-2"
                              style="background-color: var(--red); color: white;">Register Now</a> </button>
               </div>
               <div class="col-lg-6 col-sm-12 px-0">
                    <img src="./images/minya.jfif" style="width: 100%;">
               </div>
          </div>
          <div class="row">

               <div  data-aos="fade-up" class="col-lg-6 col-sm-12 px-0">
                    <img src="./images/sohag.jpg" style="width: 100%;">
               </div>
               <div  data-aos="fade-down" class="col-lg-6 col-sm-12 text-center px-3" style="display: block; margin: auto;">
                    <div class="text-uppercase font-wei" style="color: var(--red); font-size: 60px;"> Sohag</div>
                    <div style="font-family:'Arimo';">The goal of a hackathon is to create functioning software or hardware by the end of the event.
                     Hackathons tend to have a specific focus, which can include the programming language 
                     used, the operating system, an application, an API, or the subject and the demographic 
                     group of the programmers. In other cases, there is no restriction on the type of software 
                     being created.</div>
                    <button class="btn py-4"><a href="{{ route('apply_hackathon') }}" class="btn color-white py-2"
                              style="background-color: var(--red); color: white;">Register Now</a> </button>
               </div>
          </div>
          <div class="row" style="border-bottom: 0.1px white solid;">
               <div  data-aos="fade-up" class="col-lg-6 col-sm-12 text-center px-3" style="display: block; margin: auto;">
                    <div class="text-uppercase font-wei" style="color: var(--red); font-size: 60px;">Qena</div>
                    <div style="font-family:'Arimo';">The goal of a hackathon is to create functioning software or hardware by the end of the event.
                     Hackathons tend to have a specific focus, which can include the programming language 
                     used, the operating system, an application, an API, or the subject and the demographic 
                     group of the programmers. In other cases, there is no restriction on the type of software 
                     being created.</div>
                    <button class="btn py-4"><a href="{{ route('apply_hackathon') }}" class="btn color-white py-2"
                              style="background-color: var(--red); color: white;">Register Now</a> </button>
               </div>
               <div  data-aos="fade-down" class="col-lg-6 col-sm-12 px-0">
                    <img src="./images/minya.jfif" style="width: 100%;">
               </div>
          </div>
     </div>

     <!-- Who Can Apply Start -->
     <div  data-aos="fade-up" class="container-fluid p-5 text-light" style="background-color: white">
          <h1 style="text-align: center; font-weight: bolder; font-size: 60px; color: var(--red);">
               Who Can Apply?
          </h1>
          <div class="container" style="color: black;">
               <div class="row">
                    <div class="mb-2 col-lg-6 col-md-12 text-center py-5">
                         <i class="fa fa-user-circle rounded-circle p-3 aria-hidden='true'" ;
                              style="font-size: 50px; background-color:  var(--red); color: white;"></i>
                         <p class="mt-2 font-weight-bold h4 px-2" style="color: var(--dark-blue);">
                              Individual
                         </p>
                         <p class="mt-3 h5 px-2">


Talent ( developer/ designer)<br>
Entrepreneur ( hase idea/ problem).

                         </p>
                    </div>
                    <div class="mb-2 col-lg-6 col-md-12 text-center py-5">
                         <i class="fa fa-users rounded-circle p-3"
                              style="font-size: 50px; background-color:  var(--red); color: white;"></i>
                         <p class="mt-2 font-weight-bold h4 px-2" style="color: var(--dark-blue);">
                              Groups
                         </p>
                         <p class="mt-3 h5 px-2">
                         From 2 to 4.<br>
Has idea/problem.<br>
Use technology.<br>
Has at least 1 tech team member.
                         </p>
                    </div>
               </div>
          </div>
     </div> <!-- Who Can Apply End -->



     <!-- final Stage -->
     <div  data-aos="fade-down" class="container-fluid text-light mt-5">
          <div class="text-center mb-1 " style="color:var(--red); font-size: 60px;">FINAL STAGE</div>
          <div class="text-center mb-5 container" style="font-family:'Arimo'; width: 60%;">
               final stage will take place at Minya city for one day and there will be three winners
          </div>
          <div class="row">
               <div class="col-lg-6 col-sm-12 text-center px-3" style="display: block; margin: auto;">
                    <div class="text-uppercase font-wei" style="color: var(--red); font-size: 60px;"> Minya</div>
                    <div style="font-family:'Arimo';">The goal of a hackathon is to create functioning software or hardware by the end of the event.
                     Hackathons tend to have a specific focus, which can include the programming language 
                     used, the operating system, an application, an API, or the subject and the demographic 
                     group of the programmers. In other cases, there is no restriction on the type of software 
                     being created.</div>
               </div>
               <div class="col-lg-6 col-sm-12 px-0">
                    <img src="./images/minya.jfif" style="width: 100%;">
               </div>
          </div>
     </div>

     <!-- Prizes -->
     <div  data-aos="fade-up" class="container-fluid p-5 text-light">
          <h1 style="text-align: center; font-weight: bolder; font-size: 80px; color: var(--red);">
               THE GRAND PRIZE
          </h1>
          <div class="container">
               <div class="row">
                    <div class="mb-2 col-lg-4 col-md-12 text-center py-5">
                         <br><br><br><br>
                         <p class="mt-2 px-2">
                         <div class="font-weight-bold" style="font-size: 80px; color: var(--red);">3<span
                                   style="font-size: 20px;">rd</span></div>
                         <div style="font-size: 15px ;">Third Place</div>
                         </p>
                         <p class="mt-3 h4 px-2">
                              EGP10,000 
                         </p>
                    </div>
                    <div class="mb-2 col-lg-4 col-md-12 text-center py-5">
                         <p class="mt-2 px-2">
                         <div class="font-weight-bold" style="font-size: 80px; color: var(--red);">1<span
                                   style="font-size: 20px;">st</span></div>
                         <div style="font-size: 15px ;">First Place</div>
                         </p>
                         <p class="mt-3 h4 px-2">
                              EGP50,000 
                         </p>
                    </div>
                    <div class="mb-2 col-lg-4 col-md-12 text-center py-5">
                         <br><br>
                         <p class="mt-2  px-2">
                         <div class="font-weight-bold" style="font-size: 80px; color: var(--red);">2<span
                                   style="font-size: 20px;">nd</span></div>
                         <div style="font-size: 15px ;">Second Place</div>
                         </p>
                         <p class="mt-3 h4 px-2">
                              EGP20,000
                         </p>
                    </div>
                    <div data-aos="fade-up" class=" container btn text-center ">  
                         <a  class="m-auto" href="{{ route('apply_hackathon') }}">  <button class="btn text-center m-auto"
                          style="background-color: var(--red); color: white; font-size: 30px; border-radius: 15px;" >
                          Register Now</button></a> 
                         </div>




               </div>
          </div>
     </div> <!-- prizes End -->


@endsection


@section('scripts')
     <script>
          $(function () {
          $('#Group').on('click', function () {
               $('#groupToggler').show()
          });

          $('#Indivedual').on('click', function () {
               $('#groupToggler').hide()
          });
          });
          <script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>


     </script>
@endsection