@extends('layouts.app')

@section('content')

<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$admittype->name}}</h1>
          <p>Description about {{$admittype->name}}</p>
        </div>
      </div>

<div class="col-sm-3 col-lg-3 pull-right">
    <div class="sidbar-module">
        <h4>Setting</h4>
            <ol class="list-unstyled">
                 <li><a href="/admittypes/create">Add New Admittype</a></li>
                <li><a href="/admittypes/{{ $admittype->id }}/edit">Edit Admit Type</a></li>
                <li>
                <a 
                    href="#" 
                    onclick="
                    var result = confirm ('Are you sure you want to delete this admittype? ');
                        if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                        }
                    ">
                Delete Admit Type</a>

                <form id="delete-form" action="{{ route('admittypes.destroy', [$admittype->id])}}"
                        method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>
                </li>
            </ol>
    </div>
@endsection