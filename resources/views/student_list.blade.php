@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a href="{{ route('home') }}"><button class="btn btn-outline-primary">Add New Student</button></a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Student Name</th>
            <th scope="col">Image</th>
            <th scope="col">Student Age</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>


          </tr>
        </thead>
        <tbody>

            @foreach ($student as $student )
             <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                {{--  <td>{{  }}</td>  --}}
                <td> <img style="width: 40px; height:40px;" src="{{ asset('image/'.$student->image) }}"></td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->status }}</td>

                <td>
                 {{--  href="{{ route('edit_products',$student->id) }}"
                     --}}
                <a href="{{ route('edit_student',$student->id) }}"> <i class="fa fa-edit"></i></a>  ||
                <a href="{{ route('delete_student',$student->id) }}"> <i style="color:red" class="fa fa-trash"></i> </a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
