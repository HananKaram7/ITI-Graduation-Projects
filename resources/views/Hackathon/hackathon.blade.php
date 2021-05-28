@extends('layouts.layout')


@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('css/hackathon.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('js/aos-master/dist/aos.css') }}">
@endsection

@section('body')
    <!-- FORM -->
	<div class="container">
		<div class="h1 text-center mb-5" style="color:#e8465a; margin-top:50px;">
			APPLY FOR HACKATHON NOW!
		</div>
		<form class="text-light container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 30px; padding:20px;" action="{{ route('hackathon.store') }}" method="POST">
         @csrf

		 {{-- @if($errors->any())
		 <div class="alert text-danger w-50  py-3">
		   @foreach ($errors->all() as $err)
		   <p class="mb-0">{{$err}}</p>
		   @endforeach
		 </div>
		 @endif --}}

			<div class="row">
				<!-- NAME -->
				<div class="form-group col-md-6 col-sm-12 ">
					<label for="exampleInputEmail1">Name:</label> <span class="text-danger">*</span>
					<input type="text" class="form-control" name="name" placeholder="" required>
				</div>
				<!-- MOBILE NUMBER -->
				<div class="form-group col-md-6 col-sm-12">
					<label for="exampleInputPassword1">Mobile</label> <span class="text-danger">*</span>
					<input type="text" name="mobile" class="form-control" placeholder="" required>
				</div>
			</div>
			<!-- EMAIL -->
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label> <span class="text-danger">*</span>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
					placeholder="" required>
			</div>


			<div class="row">

				<!-- Your Background/Experience -->
				<div class="form-group col-md-6 col-sm-12" style="width: 100%;">
					<label class="text-light">Your Background/Experience: </label>
					<select class="form-control" name="Background_Experience" required>
						<option disabled selected hidden>Background/Experience</option>
						<option value="Entrepreneur (Have an idea)">Entrepreneur (Have an idea)</option>
						<option value="Business Development">Business Development</option>
						<option value="Developer">Developer</option>
						<option value="Marketer">Marketer</option>
						<option value="Designer">Designer</option>
					</select> 
				</div>

				<!-- GOVERNATE -->
				<div class="form-group col-md-6 col-sm-12" style="width: 100%;">
					<label class="text-light">choose your Governate: </label>
					<select class="form-control" name="Governate" required>
						<option disabled selected hidden>Governate</option>
						<option value="Minya">Minya</option>
						<option value="Sohag">Sohag</option>
						<option value="Qena">Qena</option>
					</select> 
				</div>

			</div>


			<!-- Your Profile Link(GitHub/LinkedIn/Behance) -->
			<div class="form-group">
				<label for="exampleInputEmail1">Your Profile Link(GitHub/LinkedIn/Behance)</label>
				<input type="text" class="form-control" name="Profile_Link" placeholder="">
			</div>



			<!-- You're Participating As -->
			<label>You're Participating As:</label> <span class="text-danger">*</span> <br>
			<div class="form-check" required>
				<input class="form-check-input" type="radio" value="Indivedual" id="Indivedual" name="participating">
				<label class="form-check-label" for="Indivedual">Indivedual</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" value="Group" id="Group" name="participating">
				<label class="form-check-label" for="Group">Group</label>
			</div>
			<br>
			<div id="groupToggler" style="display: none;">

				<div class="h1"> if you choosed Group: </div>

				<!-- TEAM NAME -->
				<div class="form-group">
					<label for="exampleInputEmail1">Team Name</label>
					<input type="text" class="form-control" name="teamName" placeholder="">
				</div>
				<div class="row">
					<!-- TEAM NUMBER -->
					<div class="form-group col-md-6 col-sm-12">
						<label for="exampleInputEmail1">Team Number</label>
						<input type="text" class="form-control" name="teamNo" placeholder="">
					</div>

					<!-- TEAM MEMBERS NAMES -->
					<div class="form-group col-md-6 col-sm-12">
						<label for="exampleInputEmail1">Members Names</label>
						<input type="text" class="form-control" name="membersNames" placeholder="">
					</div>
				</div>

				<!-- Describe You're Idea(For Entrepreneurs/Teams) -->
				<div class="form-group">
					<label for="exampleInputEmail1">Describe You're Idea(For Entrepreneurs/Teams)</label>
					<textarea rows="4" cols="50" class="form-control" name="Describe_Idea" placeholder=""> </textarea>
				</div>


				<!-- What Do You Need To Execute Your Idea -->
				<div class="form-group">
					<label for="exampleInputEmail1">What Do You Need To Execute Your Idea</label>
					<textarea rows="4" cols="50" class="form-control" name="Need_To_Execute_Your_Idea"
						placeholder=""> </textarea>
				</div>


				<!-- What Kind Of Mentorship Do You Need -->
				<div class="form-group">
					<label for="exampleInputEmail1">What Kind Of Mentorship Do You Need</label>
					<textarea rows="4" cols="50" class="form-control" name="Mentorship_You_Need" placeholder=""> </textarea>
				</div>
			</div>

			<!-- Have You Participated In Any Hackathons Before -->
			<label>Have You Participated In Any Hackathons Before</label><br>
			<div class="form-check">
				<input class="form-check-input" type="radio" value="yes" id="yes" name="Participated_Hackathons_Before">
				<label class="form-check-label" for="yes">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" value="No" id="No" name="Participated_Hackathons_Before">
				<label class="form-check-label" for="No">No</label>
			</div>
			<br>

			<!-- If Yes, Mention The Hackathon Name -->
			<div class="form-group">
				<label>If Yes, Mention The Hackathon Name</label>
				<input class="form-control" name="Hackathon_Name" placeholder=""> 
			</div>



			<!-- How Did You Know About Innovation Day Hackathon -->
			<label> How Did You Know About Innovation Day Hackathon</label> <br>
			<div class="form-group btn">
				<select class="form-control" name="Know_About">
					<option disabled selected hidden> choose</option>
					<option value="Friends">Friends</option>
					<option value="Social Media">Social Media</option>
					<option value="others">others</option>
				</select>
			</div><br>

			<!-- Add Your Comment -->
			<div class="form-group">
				<label>Add Your Comment</label>
				<textarea rows="4" cols="50" class="form-control" name="comment" placeholder=""> </textarea>
			</div>








			<!-- SUBMIT BUTTON -->
			<br>
			<div class="text-center my-2"><button class="btn text-center text-light rounded-top" name="Submit" style="background-color:var(--red);"type="submit">submit</button></div>

			{{-- <button type="submit" name="Submit" class="btn text-center text-light" style="background-color:var(--red);">Submit</button> --}}
	</div>
	</form>
@endsection


@section('scripts')
   <script>
      $(function () {
         $('#Group').on('click', function () {
            $('#groupToggler').show()
         });

         $('#Indivedual').on('click', function () {
            $('#groupToggler').hide()
         });
      });
   </script>
   <script type="text/javascript" src="{{ URL::asset('js/aos-master/dist/aos.js') }}"></script>
@endsection