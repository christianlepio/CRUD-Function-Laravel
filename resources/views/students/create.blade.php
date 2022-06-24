@extends('students.layout')
@section('content')

<div class="container  pt-5">
    <div class="card mt-5">
    <div class="card-header fs-3 fw-bold text-center">ADD STUDENT</div>
    <div class="card-body">
        
        <form action="{{ url('student') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    
    </div>
    </div>
</div>
 
@stop