@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Level</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('grade.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Level
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Level</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grade as $grade)
                        <tr>
                        <td>{{$grade->grade}}</td>
                        <td>{{$grade->description}}</td>
                        <td><a href="{{ route('grade.edit',['id'=>$grade->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('grade.destroy',['id'=>$grade->id]) }}"class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection