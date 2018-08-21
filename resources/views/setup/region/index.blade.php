@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Region</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('region.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Region
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Region</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($region as $region)
                        <tr>
                        <td>{{$region->name}}</td>
                        <td>{{$region->code}}</td>
                        <td>{{$region->description}}</td>
                        <td><a href="{{ route('region.edit',['id'=>$region->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('region.destroy',['id'=>$region->id]) }}"class="btn btn-danger">Delete</a></td>
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