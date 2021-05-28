@extends('layouts.layout')


@section('styles')
     <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/workshops.contact.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
@endsection

@section('body')
 <div class="text-light py-5"  >
         <h1 class="display-4 text-center " >Viewing Speaker : {{ $data->fullname }}</h1>
      </div>
 
   <div class="container text-light m-auto py-3 "  style="background-color: var( --lighter-gray);">
      
      <div class="row">
          <div class="col-xl-4 col-md-4 col-sm-12">
            <img src="{{asset("uploads/$data->image_upload")}}" class="img-item img-fluid" style="width:300px" >
          </div>
          <div class="col-xl-8 col-md-8 col-sm-12">
     <h3 style="color: #101d3d;"> name :{{ $data->fullname }}</h3>
     <h5 class="a-after"></h5>
   <p  style="color: #101d3d;"> mobile: {{ $data->Phonenum }}</p>   
    <p  style="color: #101d3d;"> Email: {{ $data->email }}</p> 
    <p  style="color: #101d3d;"> job tittle: {{ $data->jobtittle }}</p> 
    {{-- <p class="text-light"> 	bio: {{ $data->bio }}</p>  --}}
    <a href="{{ $data->Linked_In_Profile_Link }}" target="_blank"><p  style="color: #101d3d;"> LinkedIn Profile: {{ $data->Linked_In_Profile_Link }} </p> </a>
    <p  style="color: #101d3d;"> governorate: {{ $data->governorate }}</p> 
    <p  style="color: #101d3d;"> company: {{ $data->company }}</p> 
   <a class="btn text-light mb-2 my-4"  style="background-color:  var( --red);" href="{{ route('speakersweb') }}">Back</a>  
          </div>
  
      </div>
   
   </div> 
  
@endsection