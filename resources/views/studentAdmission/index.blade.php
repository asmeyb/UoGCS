@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Student List</div>

                <div class="card-body">
                            
                <div>
                <a href="{{route('studentAdmission.create')}}" class="btn btn-success pull-right">Add Student</a>
                </div>
                <br/>
                <table class="table table-sm">
                <tbody>
                    <thead>
                        <tr>
                        <th>Photo </th>
                        <th>First Name</th>
                        <th>Father Name</th>
                        <th>Sex</th>
                        <th>Emergency Contact</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    
                    @if(count($students) > 0)
                       @foreach($students as $student)
                        <tr>
                            <td><img class="img-circle" src="{{asset($student->photo)}}" alt="{{$student->firstName}}" width="35px" height="25px"/></td>
                            <td>{{$student->firstName}}</td>
                            <td>{{$student->middleName}}</td>
                            <td>{{$student->sex}}</td>
                            <td>{{$student->studentEmergencyFullName}}</td>
                            <td>
                                <a href="{{route('studentAdmission.edit',['id'=>$student->id])}}" class="btn btn-info btn-sm">Edit</a> 
                                <a href="{{route('studentAdmission.destroy',['id'=>$student->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>

                        </tr>
                       @endforeach
                    @else
                        Still No student Registred
                    @endif
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection