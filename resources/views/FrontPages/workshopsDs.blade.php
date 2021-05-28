@extends('layouts.layout')


@section('styles')
     <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/workshops.contact.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
@endsection
@section('body')
<section class="py-5" >
        
    <div data-aos="fade-down" class="m-auto text-center">
        <h1  style="color: #f1f1f1;">THIS YEAR’S <span style="color: #e8465a">
            <span style="; font-size: 58px;">8</span> innovation</span> SESSIONS</h1>
        <p style="color: #f1f1f1;">You will be able to attend any of the workshops!</p>
    </div>
    <div class="container">
        

        <div class="row">
            <div data-aos="fade-up" class="col-lg-12 col-md-12 col-sm-12 shadow-sm  py-3">
                <div class="content1 bg-white">
                    <div class="content2 p-3 border-bottom" style="background-color: #f1f1f1;">
                        <p style="color: #e8465a;">1st Day at 18:00 to 20:00</p>
                        <h5 style="color: #e8465a;">MAKE BULLETPROOF DECISIONS</h5>
                    </div>
                    <div class="col-md-8">
       <h3 class="text-uppercase" style="color:#e8465a; max-width: 90%;">MAKE BULLETPROOF DECISIONS</h3>
       <h5 class="a-after"></h5>
       <h2 class="b-after text-capitalize text-muted">deep-dive workshops</h2>
       <p style="color: #e8465a;">Lorem ipsum dolor sit amet
         consectetur adipisicing elit. Facere corrupti, labore modi
          error voluptas porro illum quos aliquam fugit perspiciatis praesentium
          fuga recusandae ut beatae animi ullam quod necessitatibus
          inventore repudiandae deleniti sunt et cum repellat rerum! Voluptate nam
      .</p>
 </div>

 
 <a class="m-auto" href="{{ route('apply_workshop') }}">
   <button class="c-b text-uppercase btn ml-2 my-3" style="background-color: #205cfa; color: #f1f1f1;">Register Now</button></a>
                </div>
            </div>
           
        
       
          
            
          
        </div>
    </div>
</section>
    
@endsection

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>


@endsection