@extends('layouts.app')

@section('content')

<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$semester->name}}</h1>
          <p>Description about {{$semester->name}}</p>
        </div>
      </div>

<div class="col-sm-3 col-lg-3 pull-right">
    <div class="sidbar-module">
        <h4>Setting</h4>
            <ol class="list-unstyled">
                 <li><a href="/semesters/create">Add New Semester</a></li>
                <li><a href="/semesters/{{ $semester->id }}/edit">Edit Semester</a></li>
                <li>
                <a 
                    href="#" 
                    onclick="
                    var result = confirm ('Are you sure you want to delete this semester? ');
                        if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                        }
                    ">
                Delete Semester</a>

                <form id="delete-form" action="{{ route('semesters.destroy', [$semester->id])}}"
                        method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>
                </li>
            </ol>
    </div>
@endsection