@extends('layouts.layout')


@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('css/partnersform.css') }}">
@endsection

@section('body')
<div class="container">
		<h4 class="display-10 text-center">Apply For Startups Pitching Competition</h4><hr><br>
		 </div>
		<form action="{{ route('startup.store') }}" method="POST">
		@csrf
		   <div class="form-group">
		     <label for="company_name">Startup Name</label>
		     <input type="text"
		           class="form-control"
		           id="name"
		           name="startup_name"
		           value=""
		           placeholder="Enter name">
		   </div>

			 <div class="form-group">
				 <label for="name">Industry"Category"</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="industry"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

			 <div class="form-group">
				 <label for="name">Startup Website</label>
				 <input type="url"
							 class="form-control"
							 id="brief"
							 name="website"
							 value=""
							 placeholder="Add Your Company URL">
			 </div>

			 <div class="">
				 <label for="packages">Startup Stage</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="radio" name="stage" id="main_partner"
					 value="Idea Stage">
  			  <label class="form-check-label" for="main_partner">
  			    Idea Stage
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="stage" id="main_partner"
					 value="MVP Stage">
  			  <label class="form-check-label" for="main_partner">
  			    MVP Stage
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="stage" id="main_partner"
					 value="Product Market Fir Stage">
  			  <label class="form-check-label" for="main_partner">
  			    Product Market Fit Stage
  			  </label>
  			</div>

              <div class="form-check">
  			  <input class="form-check-input" type="radio" name="stage" id="main_partner"
					 value="Growth Stage">
  			  <label class="form-check-label" for="main_partner">
  			    Growth Stage
  			  </label>
  			</div>
			 </div>

             <div class="form-group">
				 <label for="name">Startup Is Based In?</label>
				 <input type="text"
							 class="form-control"
							 id="gov"
							 name="gov"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

             <div class="form-group">
				 <label for="name">When Did You Raised Fund For The Last Time?</label>
				 <input type="date"
							 class="form-control"
							 id="brief"
							 name="fund"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

             <div class="form-group">
				 <label for="name">The Amount Of Fund Was?</label>
				 <input type="number"
							 class="form-control"
							 id="brief"
							 name="money"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

             <div class="form-group">
				 <label for="name">The Fund Was From?</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="doner"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

			 <div class="form-group">
		     <label for="rep_name">Founder's Name</label>
		     <input type="text"
		           class="form-control"
		           id="rep_name"
		           name="founder_name"
		           value=""
		           placeholder="Enter Your Representative Name">
		   </div>

		   <div class="form-group">
		     <label for="rep_email">Founder's Email</label>
		     <input type="email"
		           class="form-control"
		           id="rep_email"
		           name="founder_email"
		           value=""
		           placeholder="Enter Your Representative Email">
		   </div>

			 <div class="form-group">
		     <label for="rep_phone">Founder Phone Number</label>
		     <input type="number"
		           class="form-control"
		           id="rep_phone"
		           name="founder_phone"
		           value=""
		           placeholder="Enter Your Representative Phone Number">
		   </div>

           <div class="form-group">
				 <label for="name">Tell Us More About Your Startup</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="brief"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

             <div class="form-group">
				 <label for="name">Why Do You Want To Exhibit At ID?</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="whyID"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

			 <div class="form-group">
				 <label for="booth_supplies">What Supplies Do You Need For Your Booth?</label>
				 <input type="text"
							 class="form-control"
							 id="booth_supplies"
							 name="booth_supplies"
							 value=""
							 placeholder="Add The Supplies You Need">
			 </div>
			 <div class="form-group">
				 <label for="booth_supplies">What Stuff Will You Bring For Your Booth?</label>
				 <input type="text"
							 class="form-control"
							 id="booth_stuff"
							 name="booth_stuff"
							 value=""
							 placeholder="Add The Stuff You'll Bring'">
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