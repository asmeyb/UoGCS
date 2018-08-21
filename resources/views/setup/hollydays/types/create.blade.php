@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-defualt">
            <div class="panel panel-heading">
                Create New Holly Day Type
            </div>
            <div class="panel-body">
                <form action="{{route('hollydaytypes.store')}}" method="POST">
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
                                Store Holly Day Type
                            </button>
                    </div>                  
                </form>
            </div>
        </div>
        </div>
@endsection