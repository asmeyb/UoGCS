@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Student Type</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('studenttype.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Student Type
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Student Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryes as $category)
                        <tr>
                        <td>{{$category->category}}</td>
                        <td>{{$category->description}}</td>
                        <td><a href="{{ route('studenttype.edit',['id'=>$category->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('studenttype.destroy',['id'=>$category->id]) }}"class="btn btn-danger">Delete</a></td>
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