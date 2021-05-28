@extends('layouts.layout2')

@section('body')


   <div class="container text-light">


      <div class="jumbotron text-light" style="background-color: #101d3d;">
         <h1 class="display-4" style="color:#e8465a;margin-top:50px;">Viewing Attendee : <span style="color: var(--white);">{{ $data->fullname }}</span></h1>
      </div>

   <div class="h6"> <b class="h5 text-warning"> Name:</b> {{ $data->fullname }}</div>   
   <div class="h6"> <b class="h5 text-warning"> mobile:</b> {{ $data->Phonenum }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Email:</b> {{ $data->email }}</div>  
   
   <a class="btn text-light mb-2 my-4" style="background-color: var(--red);" href="{{ route('speaker.index') }}">Back</a> 

   
   </div> 
  
@endsection