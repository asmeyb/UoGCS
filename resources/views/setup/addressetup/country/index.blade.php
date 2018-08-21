@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Country</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('country.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Country
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($country as $country)
                        <tr>
                        <td>{{$country->name}}</td>
                        <td>{{$country->code}}</td>
                        <td>{{$country->description}}</td>
                        <td><a href="{{ route('country.edit',['id'=>$country->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('country.destroy',['id'=>$country->id]) }}"class="btn btn-danger">Delete</a></td>
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