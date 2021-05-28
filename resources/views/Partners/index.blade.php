@extends('layouts.layout2')


@section('body')
<div class="container-fluid" style="width:90%;">


<div class="text-light" style="background-color: #101d3d;">
   <h1 class="display-4"style="color:#e8465a;padding-top:50px;">Event Partners</h1><br>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
   {{ $message }}
</div>
@endif
<table class="table table-Secondary table-bordered table-hover">
   <thead>
      <tr>
         <th scope="col">Company Name</th>
         <th scope="col">Company URL</th>
         <th scope="col">Rep Name</th>
         <th scope="col">Rep Phone</th>
         <th scope="col">Package Type</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($data as $item)
      <tr>
         <td>{{ $item->company_name }}</td>
         <td>{{ $item->company_url }}</td>
         <td>{{ $item->rep_name }}</td>
         <td>{{ $item->rep_phone }}</td>
         <td>{{ $item->package_type }}</td>
         <td>
            <div class="row">
               <div class="col-6"><a class="btn btn-success" href="{{ route('partner.show',$item->id)}} ">View</a></div>
               <div class="col-6">
                  <form action="{{ route('partner.destroy', $item->id)}}" method="POST">
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
<a class="btn btn-primary mb-2" href="{{ route('partner.create') }}">Add New Partner</a> 

</div>



@endsection