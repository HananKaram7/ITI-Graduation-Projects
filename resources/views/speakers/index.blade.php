@extends('layouts.layout2')


@section('body')
<div class="container">
   <div class="jumbotron text-light" style="background-color: #101d3d;">
      <h1 class="display-4" style="color:#e8465a;padding-top:50px;">All Speakers</h1>
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
            <th scope="col">FullName</th>
            <th scope="col">E-mail</th>
            <th scope="col">Mobile</th>
            <th scope="col">Actions</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($data as $item)
         <tr>
            <td>{{ $item->fullname }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->Phonenum}}</td>
            {{-- <td>{{ $item-> }}</td> --}}

            <td>
               <div class="row">
                  <div class="col-2"><a href="{{ route('speaker.show', $item) }}" class="btn btn-info"> view</a></div>
                  <div class="col-2"><a href="{{ route('speaker.edit',$item) }}" class="btn btn-info"> edit</a></div>
                  {{-- <td>
                     <a href="{{ route('students.edit',$item) }}" class="btn btn-warning"> Edit</a>
                 </td> --}}
                  {{-- <div class="col-2"><a class="btn btn-warning" href="{{ route('hackathon.edit',$item->id)}}">Edit</a></div> --}}
                  <div class="col-2">
                     <form action="{{ route('speaker.destroy', $item->id)}}" method="POST">
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