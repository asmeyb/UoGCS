@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Wereda</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('wereda.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Wereda
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Wereda</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wereda as $wereda)
                        <tr>
                        <td>{{$wereda->name}}</td>
                        <td>{{$wereda->code}}</td>
                        <td>{{$wereda->description}}</td>
                        <td><a href="{{ route('wereda.edit',['id'=>$wereda->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('wereda.destroy',['id'=>$wereda->id]) }}"class="btn btn-danger">Delete</a></td>
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