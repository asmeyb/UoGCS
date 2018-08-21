@extends('layouts.app')

@section('content')
        <div class="panel panel-defualt">
            <div class="panel panel-heading">
                Create New Blood Type
            </div>
            <div class="panel-body">
                <form action="{{route('attendance.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <lable for="type">Type</lable>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="description">Description</lable>
                        <input type="text" name="description" class="form-control">
                    </div>              
                    <div class="form-group text-center">
                            <button name="" class="btn btn-success" type="submit">
                                Store Attendance Type
                            </button>
                    </div>                  
                </form>
            </div>
        </div>
@endsection