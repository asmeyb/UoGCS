@extends('layouts.app')

@section('content')

<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$subject->name}}</h1>
          <p>Description about {{$subject->name}}</p>
        </div>
      </div>

<div class="col-sm-3 col-lg-3 pull-right">
    <div class="sidbar-module">
        <h4>Setting</h4>
            <ol class="list-unstyled">
                 <li><a href="/subjects/create">Add New Subject</a></li>
                <li><a href="/subjects/{{ $subject->id }}/edit">Edit Subject</a></li>
                <li>
                <a 
                    href="#" 
                    onclick="
                    var result = confirm ('Are you sure you want to delete this subject? ');
                        if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                        }
                    ">
                Delete Subject</a>

                <form id="delete-form" action="{{ route('subjects.destroy', [$subject->id])}}"
                        method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>
                </li>
            </ol>
    </div>
@endsection