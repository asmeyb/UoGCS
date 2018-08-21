@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offser-3">
    <div class="panel panel-primary">
    <div class="panel-heading"> Semesters</div>
    <div class="panel-body">

    <ul class="list-group">
        @foreach($semesters as $semester)
            <a href="http://localhost:8000/semesters/{{$semester->id}}"> 
            <li class="list-group-item">{{$semester->name}}</li></a>
        @endforeach
    </ul>
    <button class="btn"><a  href="/semesters/create">Add New Semester</a></button>   
    

    </div>
    </div>
</div>

@endsection