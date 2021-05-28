<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Innovation Day </title>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Viga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@yield('style')
<style>
body {font-family: "viga", sans-serif;
   background-color:#101d3d;
}

.sidebar {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #e8465a;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  margin:15px 10px 0 10px;
  padding: 6px 4px 3px 16px;
  text-decoration: none;
  font-size: 18px;
  color: #101d3d;
  display: block;
  border: solid 2px #101d3d;
  border-radius: 10px;
}

.sidebar a:hover {
  color: #ffffff;
  border: solid 2px #ffffff;
}

.main {
  margin-left: 220px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 16px;}
}
</style>
</head>
<body  style="background-color:#101d3d;">
<x-app-layout>
    <div name="header" style="background-color:#101d3d;margin-top:0; height:100vh;">
    <div class="sidebar">
	<a href="#home" style="border:none;"><img  src="{{ URL::asset('images/logo4.png') }}" width=160> </a>
    <br> <br> <br><br>
  <a href="admin"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="{{ route('startup.index')}}"><i class="fa fa-rocket"></i> Startups</a>
  <a href="{{ route('partner.index')}}"><i class="fa fa-handshake-o"></i> Partners</a>
  <a href="{{ route('speaker.index')}}"><i class="fa fa-fw fa-microphone"></i> Speakers</a>
  <a href="{{ route('attendee.index')}}"><i class="fa fa-fw fa-user"></i> Attendees</a>
  <a href="{{ route('hackathon.index')}}"><i class="fa fa-codepen"></i> Hackathon</a>
  <a href="{{ route('workshop.index')}}"><i class="fa fa-sticky-note"></i> Workshops</a>
  <a href="adduser"><i class="fa fa-user"></i> Add Admin</a>
</div>

<div class="main">
  
@yield('body')
  </div>  
</div>  
</x-app-layout>

</body>
</html> 
