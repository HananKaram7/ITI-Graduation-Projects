@extends('layouts.layout2')


@section('body')
<div class="container-fluid" style="width:97%;">


   <div class="text-light" style="background-color: #101d3d;">
      <h1 class="display-4"style="color:#e8465a;padding-top:50px;">Startups Exhibition Data</h1><br>
   </div>
   @if ($message = Session::get('success'))
   <div class="alert alert-success" role="alert">
      {{ $message }}
   </div>
   @endif
   <table class="table table-Secondary table-bordered table-hover">
      <thead>
         <tr>
            <th scope="col">Startup Name</th>
            <th scope="col">Category</th>
            <th scope="col">Fund</th>
            <th scope="col">Stage</th>
            <th scope="col">Governorate</th>
            <th scope="col">Website</th>
            <th scope="col">Founder</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($data as $item)
         <tr>
            <td>{{ $item->startup_name }}</td>
            <td>{{ $item->industry }}</td>
            <td>{{ $item->money }}</td>
            <td>{{ $item->stage }}</td>
            <td>{{ $item->gov }}</td>
            <td>{{ $item->website }}</td>
            <td>{{ $item->founder_name }}</td>
            <td>
               <div class="row">
                  <div class="col-6"><a class="btn btn-success" href="{{ route('startup.show',$item->id)}} ">View</a></div>
                  <div class="col-6">
                     <form action="{{ route('startup.destroy', $item->id)}}" method="POST">
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
   <a class="btn btn-primary mb-2" href="{{ route('startup.create') }}">Add A Startup</a> 

</div>


@endsection