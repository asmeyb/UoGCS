@extends('layouts.app')

@section('content')

<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$relationshiptype->name}}</h1>
          <p>Description about {{$relationshiptype->name}}</p>
        </div>
      </div>

<div class="col-sm-3 col-lg-3 pull-right">
    <div class="sidbar-module">
        <h4>Setting</h4>
            <ol class="list-unstyled">
                 <li><a href="/relationshiptypes/create">Add New Relationshiptypes</a></li>
                <li><a href="/relationshiptypes/{{ $relationshiptype->id }}/edit">Edit Relationshiptypes</a></li>
                <li>
                <a 
                    href="#" 
                    onclick="
                    var result = confirm ('Are you sure you want to delete this relationshiptype? ');
                        if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                        }
                    ">
                Delete Relationshiptypes</a>

                <form id="delete-form" action="{{ route('relationshiptypes.destroy', [$relationshiptype->id])}}"
                        method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>
                </li>
            </ol>
    </div>
@endsection