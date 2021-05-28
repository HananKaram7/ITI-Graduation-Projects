<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Innovation Day  </title>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Viga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/headerandfooter.css') }}">
   @yield('styles')       
</head>

<body class="text-capitalize" style="background-color: #101d3d;">

	<!-- start the head of page -->
	{{-- <button id="btnUp" class="rounded-circle  p-2 text-white change" style="background-color: #a83341;">
		<i class="fa fa-chevron-up"></i>
	</button>  --}}

	<header>
		<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
			<a href="home" class="navbar-brand"><img src="{{ URL::asset('images/logo3.png') }}" class="ieee-logo" alt="innovation day"
					class="logo" width="180px;"></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Collection of nav links-->
			<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start" >
				<div class="navbar-nav ml-auto">
					<a href="home" class="nav-item nav-link" id="active"><span>Home</span></a>
					<a href="crowd" class="nav-item nav-link"><span>Crowd</span></a>
					<a href="speakers" class="nav-item nav-link"></i><span>Speakers</span></a>
					<a href="workshops" class="nav-item nav-link"></i><span>Workshops</span></a>
					<a href="hackathons" class="nav-item nav-link"><span>Hackathons</span></a>
					<a href="{{ route('apply_attendee')}}" class="nav-item nav-link"><span>Registration</span></a>
					<a href="about" class="nav-item nav-link"><span>About</span></a>
					<a href="contact" class="nav-item nav-link"><span>Contact Us</span></a>
				</div>
			</div>
		</nav>
	</header>
	<!-- <br><br>
	<a href="hackathon.php">Go to Home</a>-->


   @yield('body')


	<!-- footer -->
	<footer>
		<div class="footer">
			<div>
				<h2 style="font-family:'viga'; font-size: 22px; color:var(--red); font-weight:500;">Innovation Day
				</h2>
				<p>A series of integrated hackathons from idea to MVP to
					product, a three days of providing all facilities to
					the attendees also providing mentors, workshops and
					sessions. Innovation Day Hackathon is a unique event style that provide the value of awareness
					of technology to the mass and also to raise the awareness of entrepreneurship to help to launch
					startups and help motivated youth to start their own businesses, We have skilled and talented
					youth and it’s our time to motivate and lead them to make their ideas come true. Also the
					hackathon is a great opportunity for ideation and finding innovative solutions for community
					problems.
					The final day is a one day event with all activities
					of 10 talks in business technology and design featuring
					the new technologies and opportunities, panel
					discussions about investment opportunities in Upper
					Egypt, startup exhibition for 40 startups from Upper
					Egypt, and startup pitching competition for the best
					10 startups
				</p>
			</div>
			<div class="quick">
				<h2 style="font-family:'viga'; font-size: 22px; color:var(--red); font-weight:500;">Quick Links</h2>
				<a href="{{ route('apply_startup') }}">Startups Registration</a>
				<a href="{{ route('apply_partner') }}">Partners Registration</a>
				<a href="{{ route('apply_hackathon') }}">Hackathon Registration</a>
				<a href="{{ route('apply_attendee')}}">Attendees Registration</a>
				<a href="{{ route('workshopsweb')}}">Workshops Registration</a>
			</div>
			<div class="">
				<h3 style="font-family:'viga'; font-size: 22px;color:var(--red); font-weight:500;">Follow Us...</h3>
				<a href="https://www.facebook.com/events/904737229734041/" target="_blank">
					<img src="{{ URL::asset('images/fb.png') }}" alt="facebook logo" width="30px">
				</a>
				<a href="https://twitter.com/IEEEMUSB" target="_blank">
					<img src="{{ URL::asset('images/twetter.png') }}" alt="twetter logo" width="20px">
				</a>
				<a href="https://www.youtube.com/user/IEEEMUSB" target="_blank">
					<img src="{{ URL::asset('images/insta.png') }}" alt="instagram logo" width="20px">
				</a>
				<a href="https://www.youtube.com/user/IEEEMUSB" target="_blank">
					<img src="{{ URL::asset('images/youtube.png') }}"  alt="youtube" width="20px">
				</a>
				<br>
				<h3 style="font-family:'viga'; font-size: 22px;color:var(--red); font-weight:500;">Contact Us</h3>
				<span>halim@innovationday.com</span> <br>
				<span>01007397235</span>
			</div>
		</div>
		<div class="copy">
			&copy; Innovation Day Team - 2021</div>
	</footer>
   <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/aos.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/main2.js') }}"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


   @yield('scripts')
	

</body>

</html>
