@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Year</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                <div align="left">
                    <button onclick="window.location.href='{{ route('year.create') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Year
                    </button>
                </div>
                <br/>
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Year</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($year as $year)
                        <tr>
                        <td>{{$year->year}}</td>
                        <td>{{$year->description}}</td>
                        <td><a href="{{ route('year.edit',['id'=>$year->id]) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('year.destroy',['id'=>$year->id]) }}"class="btn btn-danger">Delete</a></td>
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