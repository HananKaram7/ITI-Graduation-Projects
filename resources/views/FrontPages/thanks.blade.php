<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color:#101d3d;
    color:#fff;

}
.card{
margin: auto;
margin-top:200px;
background-color:#101d3d;
box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 30px 0 rgba(0, 0, 0, 0.3);
}

</style>
</head>
<body>
<div class="card" style="width: 500px;">
<img src="{{ URL::asset('images/logo3.png') }}" class="card-img-top" alt="..." style="width:300px; padding:20px;">
  <div class="card-body">
    <h5 class="card-title">Hello Explorer</h5>
    <p class="card-text">Thank you for regestering at Innovation Day'10 <br> 
    We're glad to have you this year, A Massive experience is being set for you, Exited Yet!</p>
    <a href="home" class="btn btn-primary">Back To Site</a>
  </div>
</div>
     
</body>
</html> 
