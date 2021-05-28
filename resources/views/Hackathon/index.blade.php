@extends('layouts.layout2')


@section('body')
<div class="container">


   <div class="jumbotron text-light" style="background-color: #101d3d;">
      <h1 class="display-4" style="color:#e8465a;padding-top:50px;">Hackathon Data</h1>
   </div>
   @if ($message = Session::get('success'))
   <div class="alert alert-success" role="alert">
      {{ $message }}
   </div>
   @endif
   {{-- <a class="btn btn-primary mb-2" href="{{ route('hackathon.create') }}">Create New User</a> --}}
   <table class="table table-Secondary table-bordered table-hover">
      <thead>
         <tr>
            <th scope="col">Name</th>
            <th scope="col">mobile</th>
            <th scope="col">E-mail</th>
            <th scope="col">Actions</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($data as $item)
         <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->mobile }}</td>
            <td>{{ $item->email }}</td>
            <td>
               <div class="row">
                  <div class="col-2"><a class="btn btn-success text-white ml-3 "  href="{{ route('hackathon.show',$item->id)}} ">View</a></div>
                  {{-- <div class="col-2"><a class="btn btn-success" href="{{ route('hackathon.edit',$item->id)}}">Edit</a></div> --}}
                  <div class="col-2">
                     <form action="{{ route('hackathon.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  style="background-color: #e8465a;" class="btn text-white ml-4">Delete</button>
                     </form>
                  </div>
               </div>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>


@endsection