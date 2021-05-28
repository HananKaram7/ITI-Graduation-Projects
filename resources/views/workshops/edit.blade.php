@extends('layouts.layout')


@section('styles')
     {{-- <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"> --}}
     <link rel="stylesheet" href="{{ URL::asset('css/workshops.contact.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
@endsection
@section('body')
   
<button id="btnUp" class="rounded-circle  p-2 text-white change" style="background-color: #a83341;">
  <i class="fa fa-chevron-up"></i>
</button>
          <!-- php in the same page -->
          <form class=" col-lg-12 col-md-12 col-sm-12 w-75 m-auto" method="post" action="{{ route('workshop.update', $data->id) }}" role="form" class="contactForm py-5 container">
            @csrf 
            <div data-aos="fade-down" class="py-3">
                  <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1>
          </div>

             @if($errors->any())
            <div class="alert text-danger w-50  py-3">
              @foreach ($errors->all() as $err)
              <p class="mb-0">{{$err}}</p>
              @endforeach
            </div>
            @endif


              <div class="form-row ">
                <div class="form-group col-lg-12  col-md-12 col-sm-12">
                  <label class="main font-weight-bold text-white">  full name: <span class="text-danger">*</span></label>
                  <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ old('name', $data->name) }}"/>
                  <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                    name is valid , please enter you name
                </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <label class="main font-weight-bold text-white"> e-mail: <span class="text-danger">*</span></label>
                  <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" value="{{ old('email', $data->email) }}" />
                  <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                    e-mail is valid , please enter you mail
                </div>
                </div>
              </div>
              <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white"> phone number: <span class="text-danger">*</span></label>
                <input id="phoneNumInput" type="number" class="form-control rounded" name="phone" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{ old('phonenum', $data->phonenum) }}" />
                <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                  phone number is valid , please enter you number
              </div>
              </div>
              </div>
              <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white">Why Do You Want To Attend These Workshops: <span class="text-danger">*</span></label>
                <textarea class="form-control rounded" name="Attend" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="">{{ $data->workshop_attend}}</textarea>
                <div class="validation"></div>
              </div>
              </div>
              <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <label class="main font-weight-bold text-white"> Experience:</label>
                  <textarea class="form-control rounded" name="Experience" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="">{{ $data->Experience}}</textarea>
                  <div class="validation"></div>
                </div>
                </div>
              <div class="app-form-group">
              <label class="main font-weight-bold text-white">Workshops You Want To Attend(Up To 2):</label><br>
                          <input type="checkbox" id="ws1" name="techno" value="ws1">
                          <label class="text-white" for="male">deep-dive workshops</label><br>
                          <input type="checkbox" id="ws2" name="techno" value="ws2">
                          <label class="text-white" for="female">in bierf workshops</label><br>
                        </div>
              <div class="text-center my-2"><button class="btn text-center text-light rounded-top" name="submit"style="background-color:var(--red);" type="submit">submit</button></div>
            </form>
  
          </div>
        </div>
      
      
    </section>
  
     <!-- end the head of page -->
     <!-- ======================================statring php valedation ==================================== -->
    
    
@endsection

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/js/all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>


@endsection