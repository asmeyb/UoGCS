@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offser-3">
    <div class="panel panel-primary">
    <div class="panel-heading"> Relationshiptypes</div>
    <div class="panel-body">

    <ul class="list-group">
        @foreach($relationshiptypes as $relationshiptype)
            <a href="http://localhost:8000/relationshiptypes/{{$relationshiptype->id}}"> 
            <li class="list-group-item">{{$relationshiptype->name}}</li></a>
        @endforeach
    </ul>
    <button class="btn"><a  href="/relationshiptypes/create">Add New Relationshiptypes</a></button>   
    

    </div>
    </div>
</div>

@endsection