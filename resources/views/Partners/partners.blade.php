@extends('layouts.layout')


@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('css/partnersform.css') }}">
@endsection

@section('body')
<div class="container">
		<h4 class="display-10 text-center">Become One Of Our Partners / Sponsors</h4><hr><br>
		 </div>
		<form action="{{ route('partner.store') }}" method="POST">
		@csrf
		   <div class="form-group">
		     <label for="company_name">Company Name</label>
		     <input type="text"
		           class="form-control"
		           id="name"
		           name="company_name"
		           value=""
		           placeholder="Enter name">
		   </div>

			 <div class="form-group">
				 <label for="name">Company Brief</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="company_brief"
							 value=""
							 placeholder="Add More Info About Your Company">
			 </div>

			 <div class="form-group">
				 <label for="name">Company URL</label>
				 <input type="url"
							 class="form-control"
							 id="brief"
							 name="company_url"
							 value=""
							 placeholder="Add Your Company URL">
			 </div>

			 <div class="">
				 <label for="packages">Please Select Your Package</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="main_partner"
					 value="Main Partner">
  			  <label class="form-check-label" for="main_partner">
  			    Main Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="content_partner"
					value="Content Partner">
  			  <label class="form-check-label" for="content_partner">
  			    Content Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="media_partner"
					value="Media Partner">
  			  <label class="form-check-label" for="media_partner">
  			    Media Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="community_partner"
					value="community Partner">
  			  <label class="form-check-label" for="community_partner">
  			    Community Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="employment_partner"
					value="Employment Partner" >
  			  <label class="form-check-label" for="employment_partner">
  			    Employment Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="main_sponspr"
					value="Main Sponsor" >
  			  <label class="form-check-label" for="main_sponspr">
  			    Main Sponsor
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="golden_sponspr"
					value="Golden Sponsor">
  			  <label class="form-check-label" for="golden_sponspr">
  			    Golden Sponsor
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="selver_sponspr"
					value="Silver Partner">
  			  <label class="form-check-label" for="selver_sponspr">
  			    Silver Sponsor
  			  </label> <br> <br>
  			</div>
			 </div>

			 <div class="form-group">
		     <label for="rep_name">Company Representative Name</label>
		     <input type="text"
		           class="form-control"
		           id="rep_name"
		           name="rep_name"
		           value=""
		           placeholder="Enter Your Representative Name">
		   </div>

		   <div class="form-group">
		     <label for="rep_email">Company Representative Email</label>
		     <input type="email"
		           class="form-control"
		           id="rep_email"
		           name="rep_email"
		           value=""
		           placeholder="Enter Your Representative Email">
		   </div>

			 <div class="form-group">
		     <label for="rep_phone">Company Representative Phone Number</label>
		     <input type="text"
		           class="form-control"
		           id="rep_phone"
		           name="rep_phone"
		           value=""
		           placeholder="Enter Your Representative Phone Number">
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
		          class="btn btn-primary"
		          name="submit">Submit</button>
		    <!-- <a href="read.php" class="link-primary">View</a> -->
	    </form>
	</div>

@endsection