@extends('layouts.app')

@section('content')
    <div class="panel panel-defualt">
        <div class="panel panel-heading">
            Edit Holly Day Type
        </div>
        <div class="panel-body">
            <form action="{{route('hollydays.update',['id'=>$hollyday->id])}}" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                        <lable for="type">Holly Day Type</lable>
                        <select name="type" id="type" class="form-control">                            
                            @foreach($hollydaytypes as $hollydaytype)
                                <option value="{{$hollydaytype->id}}">{{$hollydaytype->type}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <lable for="name">Name</lable>
                    <input type="text" name="name" value="{{$hollyday->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="description">Holly Day Date</lable>
                    <input type="date" name="theday" value="{{$hollyday->theday}}" class="form-control">
                </div>              
                <div class="form-group text-center">
                        <button name="content" class="btn btn-success" type="submit">
                            Update Holly Day
                        </button>
                </div>                  
            </form>
        </div>
    </div>
@endsection