@extends('layouts.app')
@section('content')
<div class="panel panel-defualt">
        <div class="panel-heading">Attendance Types</div>
        <a href="{{route('attendance.create')}}" class="btn btn-success pull-right">Add Attendance Type</a>
        <div class="panel panel-body">
                <table class="table table-hover">
                        <thead>
                            <th>
                                Blood type
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
                            @if($attendances->count() > 0)
                            @foreach($attendances as $attendance)
                                <tr>
                                    <td>
                                        {{$attendance->type}}
                                    </td>
                                    <td>
                                        {{$attendance->description}}
                                    </td>
                                    <td>
                                        <a href="{{route('attendance.edit',['id'=>$attendance->id])}}" class="btn btn-xs btn-info">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('attendance.destroy',['id'=>$attendance->id])}}" class="btn btn-xs btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>                
                            @endforeach
                            @else
                                <tr><th colspan="3" Class="text-center">No Attendance Types yet</th></tr>
                            @endif
                        </tbody>
                
                    </table>
        </div>
    </div>
@endsection