@extends('layouts.app')

@section('content')
        <div class="panel panel-defualt">
            <div class="panel panel-heading">
                Create New Holly Day Type
            </div>
            <div class="panel-body">
                <form action="{{route('hollydays.store')}}" method="POST">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                    <lable for="type">Holly Day Type</lable>
                    <select name="type" id="type" class="form-control">
                        <option> Select type </option>
                            @foreach($hollydaytypes as $hollydaytype)
                                <option value="{{$hollydaytype->id}}">{{$hollydaytype->type}}</option>
                            @endforeach
                    </select>
                    
                    <div class="form-group">
                        <lable for="name">Holly Day Name</lable>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="theday">Holly Day Date</lable>
                        <input type="date" name="theday" class="form-control">
                    </div>              
                    <div class="form-group text-center">
                            <button name="" class="btn btn-success" type="submit">
                                Store Holly Day Type
                            </button>
                    </div>                  
                </form>
            </div>
        </div>
@endsection