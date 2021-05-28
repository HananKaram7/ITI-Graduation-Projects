@extends('layouts.layout')


@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/speakers_style.css') }}">
   
     <link rel="stylesheet" href="{{ URL::asset('css/workshop.css') }}">
    
     <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
     <style>
   .header-txt {
     background-image: url(../images/work.jpg);
     background-size: cover;
     height: 650px;
}</style>
@endsection
@section('body')
<div  data-aos="fade-up" class="container-fluid text-light text-center font-weight-bold header-txt h1 px-0">
          <span style=" display: block; margin: auto; height: 650px; padding-top: 300px; color: var(--red); 
          font-family:'viga'; font-size:70px;" id="overlay"> 
          It's Time To Learn </span>
     </div>
<!-- Second Section"Cover"-->
<!-- <section>
    <div class="mx-2 my-1" id="cover2">
      <div id="slogan"class="slogan2 d-block-flex flex-column mx-auto align-content-center justify-content-center align-items-center">
        <div class="align-self-center" style="font-family:'viga';"  data-aos="fade-up">
            Innovation Day'8 <span  style="font-family:'viga'; color:var(--red);">Workshops</span>
            <br>It's Time To Learn
        </div>
      </div>
    </div>
  </section> -->
  <h1 class="type"  data-aos="fade-up">Types Of Workshops</h1>
  <section class="info">
  <div class="inbrief"  data-aos="fade-up">
    <h1>InBrief Workshops</h1>
    <div class="content">
      <p>For 90 minutes, You can learn in many different fields such us 
        technology, business, and design.
        And You'll have the chance to spply what you've learned.
      </p>
    </div>
  </div>
  <div class="deep-dive"  data-aos="fade-down">
    <h1>Deep-Dive Workshops</h1>

    <div class="content">
      <p>For 3:30 Hours, You Can learn a full content in technology, design, or
        business.
        And you'll have the chane to innovate, try, and apply on
        what you've learned.
      </p>
    </div>
  </div>
  <div class="journey"  data-aos="fade-up">
    <h1>Discovery Journey</h1>
    <div class="content">
      <p>For 1 Hour, You will have an introduction about one of
      the most wanted fields in the market, how to learn it, and
      the market need for this field.
    </p>
    </div>
  </div>
</section>
<div class="speakers-area" >
  <h1>A Massive Content Is Here, Register Now!</h1>
<section class="speakers-boxes" style=" padding-left:12px;">
      <div class="box" id="modalBtn-1">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/What Makes A Good Design.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-2">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Laser Cutter66.png"  style="height:420px;"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-3">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Chatbots _ IBM Watson A.I..png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-4">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Business Brand.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-5">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Career Counseling.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-6">
        <div class="background-box-image" data-aos="fade-down"><img src="./images/Cyber Security.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-7">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Google Assistant.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-8">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Growth Hacking Tricks.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-9">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Basics Of Business Model.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-10">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Data Analysis.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-11">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Mobile Package and Network.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-12">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Product Management.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-13">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/UX Design as an aspect of (1).png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-14">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Using Word Press.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--blue); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-15">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Idea Validation.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-16">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Legalities For Startups.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-17">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/How To Print Your First 3D Model.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-18">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/How To Pitch Your Idea.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-19">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/How to pick your own career.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-20">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Game Development Pipeline.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-21">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Arabic Caligraphy.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-22">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Ace The Interview.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-23">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/How to build a good team.png"  style="height:420px;" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-24">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/IOT Challenges.png"  style="height:420px;" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-25">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Wireless Communications.png"alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-26">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Web Development.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-27">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Graphic Design.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-28">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Cyber Security1.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-29">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Data Science.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-30">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Embedded Systems.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-31">
        <div class="background-box-image"  data-aos="fade-up"><img src="./images/Artificial Intelegence22.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
      <div class="box" id="modalBtn-32">
        <div class="background-box-image"  data-aos="fade-down"><img src="./images/Applications Development.png" alt="">
        </div>
        <div class="box-content">
          <h3 style="color:var(--red); padding-bottom:40px; padding-left:10px;">See More</h3>
        </div>
      </div>
  </section>
</div>
<div class="bg-modal-1 modal">
  <div class="modal-contents">
    <div class="close"><span style="color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/What Makes A Good Design.png" alt="">
    </div>
    <div class="brief">
      <h1>What Makes A Good Design (In Breif)</h1>
      <p>
        <span>Instructor:</span> Mostafa Ahmed
        <br>
        Saturday, 5th of October
        <br>
        1:00 PM-2:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about graphic design and principles and elements of design <br>
        process of good design for marketing <br>
        Tips for designers and how to make your portfolio <br>
        Tools to help you to make a good design.
        <br>
        <span>Pre-Requests:</span>
        <br>
        Basics of design
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-2 modal">
  <div class="modal-contents">
    <div class="close close-2"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Laser Cutter66.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Design Your Laser Cutter (In Breif)</h1>
      <p>
        <span>Instructor:</span> Ahmed Sharouney
        <br>
        Friday, 4th of October
        <br>
        7:00 PM-8:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about fabrication Tools <br>
        The design Process <br>
        Code designe <br>
        Tools needed to operate
        <br>
        <span>Pre-Requests:</span>
        <br>
        Student/Graduate <br>
        Electrical/Mechanical Engineers
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-3 modal">
  <div class="modal-contents">
    <div class="close close-3"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Chatbots _ IBM Watson A.I..png" alt="">
    </div>
    <div class="brief">
      <h1>Chatbots & IBM Watson A.I (Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Muhammed Fayed
        <br>
          Saturday, 5th of October
        <br>
        10:30 AM-1:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Using IBM Cloud And Build some application
        <br>
        <span>Pre-Requests:</span>
        <br>
        Beginner to codes  <br>
        You should bring your laptop
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-4 modal">
  <div class="modal-contents">
    <div class="close close-4"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Business Brand.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Design Your Own Business Plan (Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Mohamed Abdelhady
        <br>
          Saturday, 5th of October
        <br>
        3:00 PM-6:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Brand Design <br>
        Tools to use <br>
        Visual Identity <br>
        Brand identity <br>
        Apply on a project
        <br>
        <span>Pre-Requests:</span>
        <br>
        Basics of design  <br>
        You should bring your laptop
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-5 modal">
  <div class="modal-contents">
    <div class="close close-5"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Career Counseling.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Design Your Own Business Plan (In Brief)</h1>
      <p>
        <span>Instructor:</span> Muhamed Aglan
        <br>
          Saturday, 5th of October
        <br>
        1:00 PM-2:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Goal Selection /
        SWOT Analysis <br>
        MOS measurement of success /
        KPIs <br>
        communication skills/
        team building theory <br>
        Presentation skills/
        leadership skills <br>
        Problem Solving Strategy
        <br>
        <span>Pre-Requests:</span>
        <br>
        Fresh Graduates/Students <br>
        Beginners
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-6 modal">
  <div class="modal-contents">
    <div class="close close-6"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Cyber Security.png" alt="">
    </div>
    <div class="brief">
      <h1>Cyber Security (Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Hesham Elzoghby
        <br>
          Friday, 4th of October
        <br>
        1:00 PM-4:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How i can join Cyber Security Career,
        How i can join Cyber Security Competitions <br>
            Learn everything about Cyber Security Jobs (Web security,
            Network security...etc) <br>
            Practice on techincal challenges during the workshop  <br>
            <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        You should bring your laptop
      </p>
      <div>
        <a href=" {{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-7 modal">
  <div class="modal-contents">
    <div class="close close-7"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Google Assistant.png" alt="">
    </div>
    <div class="brief">
      <h1>Google Assistant (Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Eslam Medhat
        <br>
          Friday, 4th of October
        <br>
        3:00 PM-6:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Create Application on Goodle assistant <br>
        Free month account on Qwiclabs to help you learn more  <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        You should bring your laptop
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-8 modal">
  <div class="modal-contents">
    <div class="close close-8"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Growth Hacking Tricks.png" alt="">
    </div>
    <div class="brief">
      <h1>Growth Hacking Tricks(In Brief)</h1>
      <p>
        <span>Instructor:</span> Nono Ghannam
        <br>
          Friday, 4th of October
        <br>
        1:00 PM-2:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        What is growth marketing <br>
        The Tools You need to Use <br>
        How to measure your growth  <br>
        <span>Pre-Requests:</span>
        <br>
        New Marketers,New Business Founders, New Startups Founder <br>
        People need to understand what grouth marketing is <br>
        You should bring your laptop
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-9 modal">
  <div class="modal-contents">
    <div class="close close-9"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Basics Of Business Model.png" alt="">
    </div>
    <div class="brief">
      <h1>Basics Of Business Model(In Brief)</h1>
      <p>
        <span>Instructor:</span> Ahmed Adel
        <br>
        Friday, 4th of October
        <br>
        5:00 PM-6:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How you can design a business model for your startup, Business <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People working on a new business or startup
      </p>
      <br>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-10 modal">
  <div class="modal-contents">
    <div class="close close-10"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Data Analysis.png" alt="">
    </div>
    <div class="brief">
      <h1>Data Analysis(Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Ali Saad
        <br>
        Friday, 4th of October
        <br>
        4:30 PM-7:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Data analysis for business <br>
        Tools that help you working on your data <br>
        Tableau & Excel <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People interested in and serious about data analysis <br>
        People dealing with data <br>
        You should bring your laptop
      </p>
      <br>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-11 modal">
  <div class="modal-contents">
    <div class="close close-11"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Mobile Package and Network.png" alt="">
    </div>
    <div class="brief">
      <h1>Mobile Package And Network (Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Waleed Elsafoury
        <br>
        Saturday, 5th of October
        <br>
        2:00 PM-5:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        You will gain knowledge about different mobile generations, communication <br>
         market neededs and what is next for 5th generation<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-12 modal">
  <div class="modal-contents">
    <div class="close close-12"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Product Management.png" alt="">
    </div>
    <div class="brief">
      <h1>Product Management (In Brief)</h1>
      <p>
        <span>Instructor:</span> Samuel Samy
        <br>
        Saturday, 5th of October
        <br>
        4:30 PM-6:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Product Lifecycle Function(PLF) <br>
        Product Plan <br>
        Market Needs<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-13 modal">
  <div class="modal-contents">
    <div class="close close-13"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/UX Design as an aspect of (1).png" alt="">
    </div>
    <div class="brief">
      <h1>UX Design As An Aspect Of Successful Product(In Brief)</h1>
      <p>
        <span>Instructor:</span> Mahmoud Isaac
        <br>
        Friday, 4th of October
        <br>
        1:00 PM-2:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        What's User Expericnce <br>
        Tools you need to use <br>
        UX process<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-14 modal">
  <div class="modal-contents">
    <div class="close close-14"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Using Word Press.png" alt="">
    </div>
    <div class="brief">
      <h1>Build Your First Website Using WordPress(Deep-Dive)</h1>
      <p>
        <span>Instructor:</span> Ahmed Heikal
        <br>
        Saturday, 5th of October
        <br>
        2:30 PM-6:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        WordPress as Content Management System <br>
        Trying Themes and Plugins <br>
        Building Simple Website <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        You should bring your laptop
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-15 modal">
  <div class="modal-contents">
    <div class="close close-15"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Idea Validation.png" alt="">
    </div>
    <div class="brief">
      <h1>Idea Validation (In Brief)</h1>
      <p>
        <span>Instructor:</span> Ahmed Adel
        <br>
        Saturday, 5th of October
        <br>
        12:30 PM-2:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How to test your product  <br>
        How to vlidate your product with the right customer<br>
        <span>Pre-Requests:</span>
        <br>
        Business model background <br>
        People Working on a business or a startup <br>
        People have an idea for startup
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-16 modal">
  <div class="modal-contents">
    <div class="close close-16"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Legalities For Startups.png" alt="">
    </div>
    <div class="brief">
      <h1>Legalities For Startups (In Brief)</h1>
      <p>
        <span>Instructor:</span> The Piller Firm
        <br>
        Friday, 4th of October
        <br>
        3:00 PM-4:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How to finalize your startup/company legal papers <br>
        Free contracts and services from the Pillar firm <br>
        <span>Pre-Requests:</span>
        <br>
        Startup Founders <br>
        Small businesses Founder
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-17 modal">
  <div class="modal-contents">
    <div class="close close-17"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/How To Print Your First 3D Model.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Print Your First 3D Model (In Brief)</h1>
      <p>
        <span>Instructor:</span> Mahmoud Tareq
        <br>
        Saturday, 5th of October
        <br>
        10:30 AM-12:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        3D Printeres World <br>
        How to operate on your 3D Printer <br>
        Design Setup& Dimention <br>
        Finishing <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        You should bring your laptop
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-18 modal">
  <div class="modal-contents">
    <div class="close close-18"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/How To Pitch Your Idea.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Pitch Your Idea (In Brief)</h1>
      <p>
        <span>Instructor:</span> Ahmed Samir
        <br>
        Friday, 4th of October
        <br>
        7:00 PM-8:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How to pitch your idea in the best way <br>
        What investors need to hear from you <br>
        What you need to focus on in your pitch deck <br>
        <span>Pre-Requests:</span>
        <br>
        For startups <br>
        Business Development
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-19 modal">
  <div class="modal-contents">
    <div class="close close-19"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/How to pick your own career.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Pick Your Own Career (In Brief)</h1>
      <p>
        <span>Instructor:</span> Rania Esmael
        <br>
        Friday, 4th of October
        <br>
        3:00 PM-4:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Self-Discovery and Career Satisfaction: Clarity, Goal Setting, and Satisfaction Inquiry <br>
        Skills Analysis: Identify and Define Core Skills and Skills Gaps <br>
        Professional Development Planning: Explore Ideal Professional Development Opportunities <br>
        Decision Making: Map out actionable steps for your career <br>
        <span>Pre-Requests:</span>
        <br>
        For fresh graduates/Student <br>
        Beginners/People want to start a career
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-20 modal">
  <div class="modal-contents">
    <div class="close close-20"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Game Development Pipeline.png" alt="">
    </div>
    <div class="brief">
      <h1>Game Development Pipeline (In Brief)</h1>
      <p>
        <span>Instructor:</span> Eslam Almohandes
        <br>
        Saturday, 5th of October
        <br>
        10:30 AM-12:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How To Design A Game And Publish It To The Market <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-21 modal">
  <div class="modal-contents">
    <div class="close close-21"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Arabic Caligraphy.png" alt="">
    </div>
    <div class="brief">
      <h1>Arabic Caligraphy (In Brief)</h1>
      <p>
        <span>Instructor:</span> Mohamed Rapea
        <br>
        Friday, 4th of October
        <br>
        5:00 PM-6:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How to enhance your Arabic font <br>
        Art of Caligraphy <br>
        How you can move on on this art  <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-22 modal">
  <div class="modal-contents">
    <div class="close close-22"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Ace The Interview.png" alt="">
    </div>
    <div class="brief">
      <h1>Discover Your Career And Ace The Interview (In Brief)</h1>
      <p>
        <span>Instructor:</span> Amir Amin
        <br>
        Saturday, 5th of October
        <br>
        2:30 PM-4:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How to find out the suitable career for you<br>
        Interview tips<br>
        How to enhance your CV <br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        Fresh Graduates/Students
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-23 modal">
  <div class="modal-contents">
    <div class="close close-23"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/How to build a good team.png" alt="">
    </div>
    <div class="brief">
      <h1>How To Build A Good Team (In Brief)</h1>
      <p>
        <span>Instructor:</span> Ahmed Desouki
        <br>
        Saturday, 5th of October
        <br>
        10:30 AM-12:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        How to pick your own team<br>
        What enhances your team performance<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        Fresh Graduates/Business Founders
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-24 modal">
  <div class="modal-contents">
    <div class="close close-24"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/IOT Challenges.png" alt="">
    </div>
    <div class="brief">
      <h1>IOT Challenges (In Brief)</h1>
      <p>
        <span>Instructor:</span> Khaled Khalifa
        <br>
        Friday, 4th of October
        <br>
        1:00 PM-2:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        You will know current market status <br>
          what market needs <br>
          what to look for and how the future will look like<br>
        <span>Pre-Requests:</span>
        <br>
        Electrical or electronics Engineering students <br>
        computer science <br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-25 modal">
  <div class="modal-contents">
    <div class="close close-25"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Wireless Communications.png" alt="">
    </div>
    <div class="brief">
      <h1>Wireless Communications (Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> Waleed Elsafoury
        <br>
        Saturday, 5th of October
        <br>
        10:30 AM-11:30 AM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-26 modal">
  <div class="modal-contents">
    <div class="close close-26"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Web Development.png" alt="">
    </div>
    <div class="brief">
      <h1>Web Development(Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> Taghreed Mohamed Kamel
        <br>
        Saturday, 5th of October
        <br>
        1:30 PM-2:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-27 modal">
  <div class="modal-contents">
    <div class="close close-27"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Graphic Design.png" alt="">
    </div>
    <div class="brief">
      <h1>Graphic Design (Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> Mostafa Ahmed
        <br>
        Saturday, 5th of October
        <br>
        3:00 PM-4:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-28 modal">
  <div class="modal-contents">
    <div class="close close-28"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Cyber Security1.png" alt="">
    </div>
    <div class="brief">
      <h1>Cyber Security (Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> ITI
        <br>
        Friday, 4th of October
        <br>
        5:30 PM-6:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-29 modal">
  <div class="modal-contents">
    <div class="close close-29"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Data Science.png" alt="">
    </div>
    <div class="brief">
      <h1>Data Science (Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> ITI
        <br>
        Friday, 4th of October
        <br>
        2:30 PM-3:30 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-30 modal">
  <div class="modal-contents">
    <div class="close close-30"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Embedded Systems.png" alt="">
    </div>
    <div class="brief">
      <h1>Embedded Systems (Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> Muhamed Tareq
        <br>
        Saturday, 5th of October
        <br>
        12:00 PM-1:00PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-31 modal">
  <div class="modal-contents">
    <div class="close close-31"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Artificial Intelegence22.png" alt="">
    </div>
    <div class="brief">
      <h1>Artificial Intelegence(Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> ITI
        <br>
        Friday, 4th of October
        <br>
        1:00 PM-2:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="bg-modal-32 modal">
  <div class="modal-contents">
    <div class="close close-32"><span style"color:var(--red);">X</span></div>
    <div class="grid">
    <div class="left-grid">
      <img src="./images/Applications Development.png" alt="">
    </div>
    <div class="brief">
      <h1>IOT Applications Development(Discovery Journey)</h1>
      <p>
        <span>Instructor:</span> ITI
        <br>
        Friday, 4th of October
        <br>
        4:00 PM-5:00 PM
        <br>
        <span>What you will Learn:</span>
        <br>
        Introduction about this field <br>
          How to learn this field(Learning Path) <br>
          Market need for this field<br>
        <span>Pre-Requests:</span>
        <br>
        For Beginners <br>
        People want to shift to this career<br>
      </p>
      <div>
        <a href="{{ route('apply_workshop') }}" target="_blank">Register Now!</a>
      </div>
    </div>
    </div>
  </div>
</div>
    
@endsection

@section('scripts')
<!-- <script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/js/main.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script> -->
<script type="text/javascript">
      document.getElementById('modalBtn-1').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-1').style.display = "flex";
      });
      document.querySelector('.close').addEventListener("click", function() {
      document.querySelector('.bg-modal-1').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-2').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-2').style.display = "flex";
      });
      document.querySelector('.close-2').addEventListener("click", function() {
      document.querySelector('.bg-modal-2').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-3').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-3').style.display = "flex";
      });
      document.querySelector('.close-3').addEventListener("click", function() {
      document.querySelector('.bg-modal-3').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-4').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-4').style.display = "flex";
      });
      document.querySelector('.close-4').addEventListener("click", function() {
      document.querySelector('.bg-modal-4').style.display = "none";
      });
      ////////
      document.getElementById('modalBtn-5').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-5').style.display = "flex";
      });
      document.querySelector('.close-5').addEventListener("click", function() {
      document.querySelector('.bg-modal-5').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-6').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-6').style.display = "flex";
      });
      document.querySelector('.close-6').addEventListener("click", function() {
      document.querySelector('.bg-modal-6').style.display = "none";
      });
      ///
      document.getElementById('modalBtn-7').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-7').style.display = "flex";
      });
      document.querySelector('.close-7').addEventListener("click", function() {
      document.querySelector('.bg-modal-7').style.display = "none";
      });
      ///
      document.getElementById('modalBtn-8').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-8').style.display = "flex";
      });
      document.querySelector('.close-8').addEventListener("click", function() {
      document.querySelector('.bg-modal-8').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-9').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-9').style.display = "flex";
      });
      document.querySelector('.close-9').addEventListener("click", function() {
      document.querySelector('.bg-modal-9').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-10').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-10').style.display = "flex";
      });
      document.querySelector('.close-10').addEventListener("click", function() {
      document.querySelector('.bg-modal-10').style.display = "none";
      });
      ///
      document.getElementById('modalBtn-11').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-11').style.display = "flex";
      });
      document.querySelector('.close-11').addEventListener("click", function() {
      document.querySelector('.bg-modal-11').style.display = "none";
      });
      ///
      document.getElementById('modalBtn-12').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-12').style.display = "flex";
      });
      document.querySelector('.close-12').addEventListener("click", function() {
      document.querySelector('.bg-modal-12').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-13').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-13').style.display = "flex";
      });
      document.querySelector('.close-13').addEventListener("click", function() {
      document.querySelector('.bg-modal-13').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-14').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-14').style.display = "flex";
      });
      document.querySelector('.close-14').addEventListener("click", function() {
      document.querySelector('.bg-modal-14').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-15').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-15').style.display = "flex";
      });
      document.querySelector('.close-15').addEventListener("click", function() {
      document.querySelector('.bg-modal-15').style.display = "none";
      });
      ////
      document.getElementById('modalBtn-16').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-16').style.display = "flex";
      });
      document.querySelector('.close-16').addEventListener("click", function() {
      document.querySelector('.bg-modal-16').style.display = "none";
      });
      /////
      document.getElementById('modalBtn-17').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-17').style.display = "flex";
      });
      document.querySelector('.close-17').addEventListener("click", function() {
      document.querySelector('.bg-modal-17').style.display = "none";
      });
      /////
      document.getElementById('modalBtn-18').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-18').style.display = "flex";
      });
      document.querySelector('.close-18').addEventListener("click", function() {
      document.querySelector('.bg-modal-18').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-19').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-19').style.display = "flex";
      });
      document.querySelector('.close-19').addEventListener("click", function() {
      document.querySelector('.bg-modal-19').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-20').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-20').style.display = "flex";
      });
      document.querySelector('.close-20').addEventListener("click", function() {
      document.querySelector('.bg-modal-20').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-21').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-21').style.display = "flex";
      });
      document.querySelector('.close-21').addEventListener("click", function() {
      document.querySelector('.bg-modal-21').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-22').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-22').style.display = "flex";
      });
      document.querySelector('.close-22').addEventListener("click", function() {
      document.querySelector('.bg-modal-22').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-23').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-23').style.display = "flex";
      });
      document.querySelector('.close-23').addEventListener("click", function() {
      document.querySelector('.bg-modal-23').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-24').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-24').style.display = "flex";
      });
      document.querySelector('.close-24').addEventListener("click", function() {
      document.querySelector('.bg-modal-24').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-25').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-25').style.display = "flex";
      });
      document.querySelector('.close-25').addEventListener("click", function() {
      document.querySelector('.bg-modal-25').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-26').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-26').style.display = "flex";
      });
      document.querySelector('.close-26').addEventListener("click", function() {
      document.querySelector('.bg-modal-26').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-27').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-27').style.display = "flex";
      });
      document.querySelector('.close-27').addEventListener("click", function() {
      document.querySelector('.bg-modal-27').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-28').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-28').style.display = "flex";
      });
      document.querySelector('.close-28').addEventListener("click", function() {
      document.querySelector('.bg-modal-28').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-29').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-29').style.display = "flex";
      });
      document.querySelector('.close-29').addEventListener("click", function() {
      document.querySelector('.bg-modal-29').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-30').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-30').style.display = "flex";
      });
      document.querySelector('.close-30').addEventListener("click", function() {
      document.querySelector('.bg-modal-30').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-31').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-31').style.display = "flex";
      });
      document.querySelector('.close-31').addEventListener("click", function() {
      document.querySelector('.bg-modal-31').style.display = "none";
      });
      //////
      document.getElementById('modalBtn-32').addEventListener
      ("click",function popup(){
        document.querySelector('.bg-modal-32').style.display = "flex";
      });
      document.querySelector('.close-32').addEventListener("click", function() {
      document.querySelector('.bg-modal-32').style.display = "none";
      });
  </script>

@endsection