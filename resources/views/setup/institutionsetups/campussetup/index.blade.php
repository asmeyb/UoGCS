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
                    <button onclick="window.location.href='{{ route('campus.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Campus
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Campus</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($campus as $campus)
                        <tr>
                        <td>{{$campus->name}}</td>
                        <td>{{$campus->code}}</td>
                        <td>{{$campus->description}}</td>
                        <td><a href="{{ route('campus.edit',['id'=>$campus->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('campus.destroy',['id'=>$campus->id]) }}"class="btn btn-danger">Delete</a></td>
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