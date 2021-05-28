@extends('layouts.layout2')

@section('body')


   <div class="container text-light">


   <a class="btn text-light mb-2 my-4" style="background-color: var(--red); display:inline-block; margin-top:50px;" href="{{ route('hackathon.index') }}">Back</a> 

      <div class="jumbotron text-light" style="background-color: #101d3d;">
         <h1 class="display-4" style="color: var(--red);">Viewing Attendee :<span style="color: var(--white);"> {{ $hackathon->name }}</span></h1>
      </div>

   <div class="h6"> <b class="h5 text-warning"> Name:</b> {{ $hackathon->name }}</div>   
   <div class="h6"> <b class="h5 text-warning"> mobile:</b> {{ $hackathon->mobile }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Email:</b> {{ $hackathon->email }}</div>  
   

   
   </div> 

@endsection