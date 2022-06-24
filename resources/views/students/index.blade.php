@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row pt-5 mt-5">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"> - CRUD FUNCTION - </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-outline-success" title="Add New Student">
                        <i class="fa-solid fa-circle-plus"></i> Add New Student
                        </a><br/><br/>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger" title="Delete Student" onclick="return confirm(&quot;Confirm to Delete...&quot;)"><i class="fa-solid fa-trash-can"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection