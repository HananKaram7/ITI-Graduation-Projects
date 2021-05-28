@extends('layouts.layout')


@section('styles')
     {{-- <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"> --}}
     <link rel="stylesheet" href="{{ URL::asset('css/speakerregister.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/aos-master/dist/aos.css') }}">
@endsection

@section('body')
<form method="post" action="{{url('/store')}}" role="form" class="contactForm py-5 container w-75 m-auto" enctype="multipart/form-data">
     @csrf
     <div data-aos="fade-down" class="py-3">
           <h1  style="color: #f1f1f1;">Registration <span style="color: #e8465a"> form</h1>
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
         <label for="exampleInputEmail1" class="text-white">FirstName:</label> <span class="text-danger">*</span>
           <input id="name-input" type="name" name="fname" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
           {{-- <div class="text-danger d-none alert alert-danger  w-57" id="nameAlert">
                       name is invalid , please enter you name
                   </div> --}}
         </div>
         <div class="form-group col-lg-6 col-md-12 col-sm-12">
         <label for="exampleInputEmail1" class="text-white">LastName:</label> <span class="text-danger">*</span>
         <input id="name1-input" type="name" name="lname" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
         <div class="text-danger d-none alert alert-danger  w-57" id="nameAlert">
                       name is invalid , please enter you name
                   </div>
         </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label for="exampleInputEmail1" class="text-white">Email address</label> <span class="text-danger">*</span>
         <input id="email-input" type="email" class="form-control rounded" name="email" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
         <div class="text-danger d-none alert alert-danger  w-75" id="emailAlert">
                       e-mail is invalid , please enter you mail
                   </div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label for="exampleInputPassword1" class="text-white">Mobile</label> <span class="text-danger">*</span>
         <input id="number-input" type="number" class="form-control rounded" name="num" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
         <div class="text-danger d-none alert alert-danger  w-75" id="phoneAlert">
                       phone number is invalid , please enter you number
                   </div>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <p class="text-white">You're Attending As:</p>
                   <input type="radio" id="Attendee" name="Attending" value="Attendee">
                   <label class="text-white" for="male">Attendee</label><br>
                   <input type="radio" id="Partner" name="Attending" value="Partner">
                   <label class="text-white" for="female">Partner</label><br>
                   <input type="radio" id="Speakers" name="Attending" value="Speakers">
                   <label class="text-white" for="other">Speakers</label>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <p class="text-white">Educational Status:</p>
                   <input type="radio" id="Attendee" name="Estatus" value="Student">
                   <label class="text-white" for="male">Student</label><br>
                   <input type="radio" id="Partner" name="Estatus" value="Bachelor">
                   <label class="text-white" for="female">Bachelor</label><br>
       </div>
       </div>
       <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label class="main  text-white">Governorate:</label>
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
       <label class="text-white" for="state" accesskey="s">College:</label>
                 <select class="w-100  form-control" id="dropdown" name="college">
                 <option value="" selected="selected">Select</option>
                 <option value="Sciences">Sciences</option>
                 <option value="Engineering">Engineering</option>
                 <option value="Education">Education</option>
                 <option value="Other">Other</option>
               </select>
       </div>
       </div>
       
      
           <div class="form-row ">
       <div class="form-group col-lg-12 col-md-12 col-sm-12">
       <label class="main  text-white ">Add Your Comment</label>
       <textarea class="form-control rounded" id="comment" name="comments"  rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
         <div class="validation"></div>
       </div>
       </div>

       <div class="text-center my-2"><button class="btn text-center text-light rounded-top" name="submit"style="background-color:var(--red);" type="submit">submit</button></div>
     </form>


@endsection


@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/index.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/register.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>

@endsection