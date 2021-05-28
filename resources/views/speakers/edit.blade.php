@extends('layouts.layout')


@section('styles')
     {{-- <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"> --}}
     <link rel="stylesheet" href="{{ URL::asset('css/speakerregister.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/aos-master/dist/aos.css') }}">
@endsection

@section('body')
<form method="post" action="{{ route('speaker.update', $data->id) }}" role="form" class="contactForm py-5 container w-75 m-auto" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     <div data-aos="fade-down" class="py-3">
           <h1  style="color: #f1f1f1;">Speakers <span style="color: #e8465a"> form</h1>
   </div>
   @if($errors->any())
            <div class="alert text-danger w-50  py-3">
              @foreach ($errors->all() as $err)
              <p class="mb-0">{{$err}}</p>
              @endforeach
            </div>
            @endif

       <div class="form-row ">
         <div class="form-group col-lg-6  col-md-12 col-sm-12">
         <label for="exampleInputEmail1" class="text-white">FullName:</label> <span class="text-danger">*</span>
           <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  value="{{ old('name', $data->fullname) }}"/>
           <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
             name is invalid , please enter you name
         </div>
         </div>
         <div class="form-group col-lg-6 col-md-12 col-sm-12">
         <label for="exampleInputEmail1" class="text-white">Email address</label> <span class="text-danger">*</span>
           <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" value="{{ old('email', $data->email) }}" />
           <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
             e-mail is invalid , please enter you mail
         </div>
         </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label for="exampleInputPassword1" class="text-white">Mobile</label> <span class="text-danger">*</span>
         <input id="phoneNumInput" type="number" class="form-control rounded" name="phone" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{ old('Phonenum', $data->Phonenum) }}" />
         <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
           phone number is invalid , please enter you number
       </div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
         <label class="main text-white">Job Tittle:</label>
         <input id="Job" type="text" class="form-control rounded" name="job" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{ old('jobtittle', $data->jobtittle) }}" />
         <div class="text-danger d-none alert alert-danger" id="inputjobAlert">
           job tittle  is invalid , please enter you job
       </div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
         <label class="main text-white">Linked In Profile Link:</label>
         <input id="Job" type="url" class="form-control rounded" name="link" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{ old('Linked_In_Profile_Link	', $data->Linked_In_Profile_Link	) }}" />
         <div class="text-danger d-none alert alert-danger" id="inputlinkAlert">
           job tittle  is invalid , please enter you job
       </div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
         <label class="main text-white">Bio:</label>
         <textarea class="form-control rounded" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="">{{ $data->bio }}</textarea>
         <div class="validation"></div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label class="main text-white ">Governorate:</label>
                 <select class="w-100  form-control" id="dropdown" name="governorate" >
                 <option value="" selected="selected">Select</option>
                 <option value="Minia">Minia</option>
                 <option value="Sohag">Sohag</option>
                 <option value="Qena">Qena</option>
               </select>
</div>
               </div>
               <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
         <label class="main text-white">Company:</label>
         <input id="Company" type="Company" class="form-control rounded" name="Company" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{ old('company', $data->company) }}"/>
         <div class="text-danger d-none alert alert-danger" id="inputCompanyAlert">
         Company  is valid , please enter you job
       </div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label class="main text-white">Add a Image :</label>
            <input class="bg-light w-100" type="file" name="file" value="{{ old('image_upload', $data->image_upload) }}" />        
           </div>
           </div>
           <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
         <label class="main text-white">Comment:</label>
         <textarea class="form-control rounded" name="message2" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="">{{ $data->comment }}</textarea>
         <div class="validation"></div>
       </div>
       </div>

       <div class="text-center my-2"><button class="bb rounded-top" name="submit" type="submit">submit</button></div>
     </form>

@endsection


@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/index.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/register.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>

@endsection