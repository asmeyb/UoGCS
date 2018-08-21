@extends('layouts.app')
@section('content')
<div class="panel panel-defualt">
        <div class="panel-heading">Holly Day Types</div>
        <a href="{{route('hollydaytypes.create')}}" class="btn btn-success pull-right">Add Attendance Type</a>
        <div class="panel panel-body">
                <table class="table table-hover">
                        <thead>
                            <th>
                                Holly Day type
                            </th>

                            <th>
                                Description
                            </th>

                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            @if($hollydaytypes->count() > 0)
                            @foreach($hollydaytypes as $hollydaytype)
                                <tr>
                                    <td>
                                        {{$hollydaytype->type}}
                                    </td>
                                    <td>
                                        {{$hollydaytype->description}}
                                    </td>
                                    <td>
                                        <a href="{{route('hollydaytypes.edit',['id'=>$hollydaytype->id])}}" class="btn btn-xs btn-info">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('hollydaytypes.destroy',['id'=>$hollydaytype->id])}}" class="btn btn-xs btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>                
                            @endforeach
                            @else
                                <tr><th colspan="3" Class="text-center">No Holly Day Types yet</th></tr>
                            @endif
                        </tbody>
                
                    </table>
        </div>
    </div>
@endsection