@extends('layouts.layout')


@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('css/partnersform.css') }}">
@endsection

@section('body')
<div class="container">
		<h4 class="display-10 text-center">Registr At Innovation Day</h4><hr><br>
		 </div>
		<form action="{{ route('attendee.store') }}" method="POST">
		@csrf
		   <div class="form-group">
		     <label for="company_name">Your Name</label>
		     <input type="text"
		           class="form-control"
		           id="name"
		           name="name"
		           value=""
		           placeholder="Add Your name">
		   </div>
           <div class="form-group">
		     <label for="rep_email">Your Email Address</label>
		     <input type="email"
		           class="form-control"
		           id="rep_email"
		           name="email"
		           value=""
		           placeholder="Add Your  Email">
		   </div>

			 <div class="form-group">
		     <label for="rep_phone"> Your Phone Number</label>
		     <input type="number"
		           class="form-control"
		           id="rep_phone"
		           name="phone"
		           value=""
		           placeholder="Add Your Phone Number">
		   </div>

           <div class="form-group">
		     <label for="rep_phone"> The Entity You Belong To:</label>
		     <input type="text"
		           class="form-control"
		           id="rep_phone"
		           name="entity"
		           value=""
		           placeholder="Add The Entity You Work At">
		   </div>

           <div class="">
           <label for="rep_phone"> Educational Status:</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="radio" name="education" id="main_partner"
					 value="Student">
  			  <label class="form-check-label" for="main_partner">
  			    Student
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="education" id="main_partner"
					 value="Under Graduate">
  			  <label class="form-check-label" for="main_partner">
  			    Under Graduate
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="education" id="main_partner"
					 value="Graduate">
  			  <label class="form-check-label" for="main_partner">
  			    Graduate
  			  </label>
  			</div>
			 </div>

			 <div class="form-group">
				 <label for="name">Where Are You From?</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="gov"
							 value=""
							 placeholder="Add Your Governorate">
			 </div>

			 <div class="form-group">
				 <label for="name">Your College</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="college"
							 value=""
							 placeholder="Add Your College">
			 </div>

             <div class="">
             <label for="rep_phone"> You Are Attending As?</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Regular Attendee">
  			  <label class="form-check-label" for="main_partner">
  			    Regular Attendee
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Partner">
  			  <label class="form-check-label" for="main_partner">
  			    Partner
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Speaker">
  			  <label class="form-check-label" for="main_partner">
  			    Speaker
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Sponsor">
  			  <label class="form-check-label" for="main_partner">
  			    Sponsor
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Investor">
  			  <label class="form-check-label" for="main_partner">
  			    Investor
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Startup">
  			  <label class="form-check-label" for="main_partner">
  			    Startup
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Hackathon">
  			  <label class="form-check-label" for="main_partner">
  			    Hackathon Applicant
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Volunteer">
  			  <label class="form-check-label" for="main_partner">
  			    Volunteer
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="attending_as" id="main_partner"
					 value="Team Member">
  			  <label class="form-check-label" for="main_partner">
  			    ID Team Member
  			  </label>
  			</div>
			 </div>
             <br><br>

             <div class="">
             <label for="rep_phone"> What Are You Intersted In?</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Technology">
  			  <label class="form-check-label" for="main_partner">
  			    Technology
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Business">
  			  <label class="form-check-label" for="main_partner">
  			    Business
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Design">
  			  <label class="form-check-label" for="main_partner">
  			    Design
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Marketing">
  			  <label class="form-check-label" for="main_partner">
  			    Marketing
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Entrepreneurship">
  			  <label class="form-check-label" for="main_partner">
                Entrepreneurship
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Gaming">
  			  <label class="form-check-label" for="main_partner">
                Gaming
  			  </label>
  			</div>
              <div class="form-check">
  			  <input class="form-check-input" type="checkbox" name="interests" id="main_partner"
					 value="Embedded System & IOT">
  			  <label class="form-check-label" for="main_partner">
                Embedded System & IOT
  			  </label>
  			</div>
            </div>
<br> <br>

           <div class="form-group">
				 <label for="name">What Is Your Favourite Activity In Innovation Day?</label>
				 <input type="text"
							 class="form-control"
							 id="gov"
							 name="fav_activity"
							 value=""
							 placeholder="Add Your Favoutite Activity">
			 </div>
             <div class="form-group">


				 <label for="name">How Did You Know About Innovation Day?</label>
				 <input type="text"
							 class="form-control"
							 id="gov"
							 name="how"
							 value=""
							 placeholder="Social Media, Friend, Offline Ads, ...">
			 </div>
			 <div class="form-group">
				 <label for="booth_supplies">Add Your Comment</label>
				 <input type="text"
							 class="form-control"
							 id="comment"
							 name="comment"
							 value=""
							 placeholder="If You Need To Add Something'">
			 </div>
		   <button type="submit"
		          class="btn btn-danger"
		          name="submit">Submit</button>
		    <!-- <a href="read.php" class="link-primary">View</a> -->
	    </form>
	</div>

@endsection