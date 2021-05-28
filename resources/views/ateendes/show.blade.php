@extends('layouts.layout')

@section('body')


   <div class="container text-light">


      <div class="jumbotron text-light" style="background-color: #101d3d;">
         <h1 class="display-4">Viewing Attendee : {{$data->firstname }}</h1>
      </div>

   <div class="h6"> <b class="h5 text-warning"> Name:</b> {{ $data->firstname}}</div>
   <div class="h6"> <b class="h5 text-warning"> Name:</b> {{ $data->lastname}}</div>   
   <div class="h6"> <b class="h5 text-warning"> mobile:</b> {{ $data->Phonenum}}</div>   
   <div class="h6"> <b class="h5 text-warning"> Email:</b> {{ $data->email}}</div>  
   
   <a class="btn text-light mb-2 my-4" style="background-color: var(--red);" href="{{ route('ateende.index') }}">Back</a> 

   
   </div> 
  
@endsection