@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Student Details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                    <form method="post" action="{{ route('update_student',$data->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                        <input type="hidden" value={{ $data->id }}  class="form-control" name="id" id="id"   placeholder="Enter Product Name">

                          <label>Student Name</label>
                          <input type="text" value={{ $data->name }} class="form-control" name="name" id="name"   placeholder="Enter Student Name">
                        </div>
                        <div class="form-group mt-2">
                            <label>Change Student Image</label> <br>
                          {{--  //  <input type="text" class="form-control" name="image" id="name"   placeholder="Enter Student Name">  --}}
                          <input type="file" name="image" value="{{ $data->imageName }}">
                        </div>

                        <div class="form-group mt-2">
                            <label>Student Age</label>
                            <input type="text" class="form-control"  value={{ $data->age }} name="age" id="price"   placeholder="Enter Student Age">
                        </div>

                        <div class="form-group mt-2">
                            <label>Status</label>
                            <select name="status" value={{ $data->status }} class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">

                                <option value="Active" {{ $data->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ $data->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-5 mb-2">Update Student</button>
                      </form>
                      <a href="{{ route('student_list') }}"><button  class="btn btn-outline-primary ">Student List</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
