@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offser-3">
    <div class="panel panel-primary">
    <div class="panel-heading"> Subjects</div>
    <div class="panel-body">

    <ul class="list-group">
        @foreach($subjects as $subject)
            <a href="http://localhost:8000/subjects/{{$subject->id}}"> 
            <li class="list-group-item">{{$subject->name}}</li></a>
        @endforeach
    </ul>
    <button class="btn"><a  href="/subjects/create">Add New Subject</a></button>   
    

    </div>
    </div>
</div>

@endsection