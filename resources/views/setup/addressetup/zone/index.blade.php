@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Zone</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('zone.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Zone
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Zone</th>
                        <th scope="col">Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zone as $zone)
                        <tr>
                        <td>{{$zone->name}}</td>
                        <td>{{$zone->code}}</td>
                        <td>{{$zone->description}}</td>
                        <td><a href="{{ route('zone.edit',['id'=>$zone->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('zone.destroy',['id'=>$zone->id]) }}"class="btn btn-danger">Delete</a></td>
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