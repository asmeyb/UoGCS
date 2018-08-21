@extends('layouts.app')

@section('content')
    <div class="panel panel-defualt">
        <div class="panel panel-heading">
            Edit Tag
        </div>
        <div class="panel-body">
            <form action="{{route('bloodgroup.update',['id'=>$bloodgroup->id])}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <lable for="name">Name</lable>
                    <input type="text" name="type" value="{{$bloodgroup->type}}" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="description">Description</lable>
                    <input type="text" name="description" value="{{$bloodgroup->description}}" class="form-control">
                </div>              
                <div class="form-group text-center">
                        <button name="content" class="btn btn-success" type="submit">
                            Update Blood Group
                        </button>
                </div>                  
            </form>
        </div>
    </div>
@endsection