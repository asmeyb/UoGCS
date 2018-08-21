@extends('layouts.app')

@section('content')
    <div class="panel panel-defualt">
        <div class="panel panel-heading">
            Edit Attendance Type
        </div>
        <div class="panel-body">
            <form action="{{route('attendance.update',['id'=>$attendance->id])}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <lable for="name">Name</lable>
                    <input type="text" name="type" value="{{$attendance->type}}" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="description">Description</lable>
                    <input type="text" name="description" value="{{$attendance->description}}" class="form-control">
                </div>              
                <div class="form-group text-center">
                        <button name="content" class="btn btn-success" type="submit">
                            Update Attendance Type
                        </button>
                </div>                  
            </form>
        </div>
    </div>
@endsection