@extends('layouts.layout2')


@section('body')
<div class="container-fluid" style="width:90%;">
<div class="text-light" style="background-color: #101d3d;">
   <h1 class="display-4"style="color:#e8465a;padding-top:50px;">Event Attendees (General)
</h1><br>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
   {{ $message }}
</div>
@endif
<table class="table table-Secondary table-bordered table-hover">
   <thead>
      <tr>
         <th scope="col">Name</th>
         <th scope="col">Email</th>
         <th scope="col">College</th>
         <th scope="col">Education</th>
         <th scope="col">Governorate</th>
         <th scope="col">Attending As</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($data as $item)
      <tr>
         <td>{{ $item->name }}</td>
         <td>{{ $item->email }}</td>
         <td>{{ $item->college }}</td>
         <td>{{ $item->education }}</td>
         <td>{{ $item->gov }}</td>
         <td>{{ $item->attending_as }}</td>

         <td>
            <div class="row">
               <div class="col-6"><a class="btn btn-success" href="{{ route('attendee.show',$item->id)}} ">View</a></div>
               <div class="col-6">
                  <form action="{{ route('attendee.destroy', $item->id)}}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
               </div>
            </div>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
<br>
</div>


@endsection