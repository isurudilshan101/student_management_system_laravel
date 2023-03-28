@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Student Details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                    <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Student Name</label>
                          <input type="text" class="form-control" name="name" id="name"   placeholder="Enter Student Name">
                        </div>
                        <div class="form-group mt-2">
                            <label>Upload Student Image</label> <br>
                          {{--  //  <input type="text" class="form-control" name="image" id="name"   placeholder="Enter Student Name">  --}}
                          <input type="file" name="image">
                        </div>

                        <div class="form-group mt-2">
                            <label>Student Age</label>
                            <input type="text" class="form-control" name="age" id="price"   placeholder="Enter Student Age">
                        </div>

                        <div class="form-group mt-2">
                            <label>Status</label>
                            <select name="status" class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">

                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-5 mb-2">Add Student</button>
                      </form>
                      <a href="{{ route('student_list') }}"><button  class="btn btn-outline-primary ">Student List</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
