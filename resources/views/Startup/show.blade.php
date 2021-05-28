@extends('layouts.layout2')

@section('body')


   <div class="container text-light">

      <a class="btn text-light mb-2" style="background-color: var(--red); display:inline-block; margin-top:50px;" href="{{ route('startup.index') }}">Back</a> 

      <div class="jumbotron text-light" style="background-color: #101d3d;">
         <h1 class="display-4"style="color: var(--red);">Startup Data :<span style="color: var(--white);"> {{ $startup->startup_name }}</span></h1>
      </div>

   <div class="h6"> <b class="h5 text-warning"> Startup Name:</b> {{ $startup->startup_name }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Category:</b> {{ $startup->industry }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Website:</b> {{ $startup->website }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Startup Stage:</b> {{ $startup->stage }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Governorate:</b> {{ $startup->gov }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Fund Date:</b> {{ $startup->fund }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Fund Amount:</b> {{ $startup->money }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Fund Entity:</b> {{ $startup->donor }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Founder Name:</b> {{ $startup->founder_name }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Founder Email:</b> {{ $startup->founder_email }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Founder Phone No.:</b> {{ $startup->founder_phone }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Startup Brief:</b> {{ $startup->brief }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Why ID:</b> {{ $startup->whyID }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Booth Supplies:</b> {{ $startup->booth_supplies }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Booth Stuff:</b> {{ $startup->booth_stuff }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Comment:</b> {{ $startup->comment }}</div>   
   </div> 

@endsection