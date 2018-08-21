@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offser-3">
    <div class="panel panel-primary">
    <div class="panel-heading"> Admit Types</div>
    <div class="panel-body">

    <ul class="list-group">
        @foreach($admittypes as $admittype)
            <a href="http://localhost:8000/admittypes/{{$admittype->id}}"> 
            <li class="list-group-item">{{$admittype->name}}</li></a>
        @endforeach
    </ul>
    <button class="btn"><a  href="/admittypes/create">Add New Admit Type</a></button>   
    

    </div>
    </div>
</div>

@endsection