@extends('layouts.app')
@section('content')
<div class="panel panel-defualt">
        <div class="panel-heading">Holly Day</div>
        <a href="{{route('hollydays.create')}}" class="btn btn-success pull-right">Add Holly Day</a>
        <div class="panel panel-body">
                <table class="table table-hover">
                        <thead>
                            <th>
                                Holly Day type
                            </th>

                            <th>
                                Name
                            </th>

                            <th>
                                Date
                            </th>

                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            @if($hollydays->count() > 0)
                            @foreach($hollydays as $hollyday)
                                <tr>
                                    <td>
                                        {{$hollyday->type}}
                                    </td>
                                    <td>
                                        {{$hollyday->name}}
                                    </td>

                                    <td>
                                        {{$hollyday->theday}}
                                    </td>

                                    <td>
                                        <a href="{{route('hollydays.edit',['id'=>$hollyday->id])}}" class="btn btn-xs btn-info">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('hollydays.destroy',['id'=>$hollyday->id])}}" class="btn btn-xs btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>                
                            @endforeach
                            @else
                                <tr><th colspan="3" Class="text-center">No Holly Day yet</th></tr>
                            @endif
                        </tbody>
                
                    </table>
        </div>
    </div>
@endsection