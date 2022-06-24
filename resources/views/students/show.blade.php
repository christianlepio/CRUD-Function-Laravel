@extends('students.layout')
@section('content')
 
<div class="container  pt-5">
    <div class="card mt-5">
        <div class="card-header fs-3 fw-bold text-center">DETAILS</div>
            <div class="card-body">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $students->name }}</h5>
                    <p class="card-text">Address : {{ $students->address }}</p>
                    <p class="card-text">Mobile : {{ $students->mobile }}</p>
                </div>
            
            </hr>
        
        </div>
    </div>
</div>