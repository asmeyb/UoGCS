@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Institution</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('institute.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Institute
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Institute</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($institute as $institute)
                        <tr>
                        <td>{{$institute->name}}</td>
                        <td>{{$institute->code}}</td>
                        <td>{{$institute->description}}</td>
                        <td><a href="{{ route('institute.edit',['id'=>$institute->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('institute.destroy',['id'=>$institute->id]) }}"class="btn btn-danger">Delete</a></td>
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