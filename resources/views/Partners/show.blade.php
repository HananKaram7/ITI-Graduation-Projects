@extends('layouts.layout2')

@section('body')


   <div class="container text-light">

      <a class="btn text-light mb-2" style="background-color: var(--red); display:inline-block; margin-top:50px;" href="{{ route('partner.index') }}">Back</a> 

      <div class="jumbotron text-light" style="background-color: #101d3d;">
         <h1 class="display-4"style="color: var(--red);">Viewing Partner :<span style="color: var(--white);"> {{ $partner->company_name }}</span></h1>
      </div>

   <div class="h6"> <b class="h5 text-warning"> Company Name:</b> {{ $partner->company_name }}</div>   
   <div class="h6"> <b class="h5 text-warning"> Company Brief:</b> {{ $partner->company_brief}}</div>     
   <div class="h6"> <b class="h5 text-warning"> Company Site:</b> {{ $partner->company_url}}</div>     
   <div class="h6"> <b class="h5 text-warning"> Selected Package:</b> {{ $partner->package_type}}</div>  
   <div class="h6"> <b class="h5 text-warning"> Company Representative Name:</b> {{ $partner->rep_name}}</div>  
   <div class="h6"> <b class="h5 text-warning"> Company Representative Email:</b> {{ $partner->rep_email}}</div>  
   <div class="h6"> <b class="h5 text-warning"> Company Representative Phone:</b> {{ $partner->rep_phone}}</div>  
   <div class="h6"> <b class="h5 text-warning"> Company Representative Phone:</b> {{ $partner->booth_supplies}}</div>  
   <div class="h6"> <b class="h5 text-warning"> Company Representative Phone:</b> {{ $partner->booth_stuff}}</div>  
   <div class="h6"> <b class="h5 text-warning"> Company Representative Phone:</b> {{ $partner->comment}}</div>  
   </div> 

@endsection