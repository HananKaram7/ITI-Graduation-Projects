@extends('layouts.layout2')

@section('body')


   <div class="container text-light">

      <a class="btn text-light mb-2" style="background-color: var(--red); display:inline-block; margin-top:50px;" href="{{ route('attendee.index') }}">Back</a> 

      <div class="jumbotron text-light" style="background-color: #101d3d;">
         <h1 class="display-4"style="color: var(--red);">Attendee Data :<span style="color: var(--white);"> {{ $attendee->name }}</span></h1>
      </div>

   <div class="h6"> <b class="h5 text-warning"> Name:</b> {{ $attendee->name }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Email:</b> {{ $attendee->email }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Phone No.:</b> {{ $attendee->phone }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Education Statue:</b> {{ $attendee->education }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Governorate:</b> {{ $attendee->gov }}</div>   
   <div class="h6"> <b class="h5 text-warning"> College:</b> {{ $attendee->college }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Attending As:</b> {{ $attendee->attending_as }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Favourite Activity:</b> {{ $attendee->fav_activity }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Entity:</b> {{ $attendee->entity }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Interests:</b> {{ $attendee->interests }}</div>   
   <div class="h6"> <b class="h5 text-warning"> How Did You Know About ID:</b> {{ $attendee->how }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Comment:</b> {{ $attendee->comment }}</div>   
   </div> 

@endsection