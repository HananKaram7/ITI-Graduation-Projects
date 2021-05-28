@extends('layouts.layout2')
@section('style')
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@endsection

@section('body')
<div class="container">
<h1 class="display-10 text-center" style="color:#e8465a;padding-top:50px; padding-bottom:30px; font-size:70px;">Attendees Growth</h1> 
<div id="myfirstchart" style="height: 400px; background-color:#f1f1f1; border: solid 5px #e8465a; border-radius:10px;">

</div></div>
<script>
  new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { day: '2012-02-20', value: 20 },
    { day: '2012-02-21', value: 10 },
    { day: '2012-02-22', value: 5 },
    { day: '2012-02-23', value: 5 },
    { day: '2012-02-24', value: 20 },
    { day: '2012-02-25', value: 8 },
    { day: '2012-02-26', value: 17 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'day',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>

@endsection
