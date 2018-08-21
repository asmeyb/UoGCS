@extends('layouts.app')
@section('content')
<div class="panel panel-defualt">
        <div class="panel-heading">Blood Group</div>
        <a href="{{route('bloodgroup.create')}}" class="btn btn-success pull-right">Add Blood Type</a>
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
                            @if($bloodGroups->count() > 0)
                            @foreach($bloodGroups as $bloodGroup)
                                <tr>
                                    <td>
                                        {{$bloodGroup->type}}
                                    </td>
                                    <td>
                                        {{$bloodGroup->description}}
                                    </td>
                                    <td>
                                        <a href="{{route('bloodgroup.edit',['id'=>$bloodGroup->id])}}" class="btn btn-xs btn-info">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('bloodgroup.destroy',['id'=>$bloodGroup->id])}}" class="btn btn-xs btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>                
                            @endforeach
                            @else
                                <tr><th colspan="3" Class="text-center">No Blood Types yet</th></tr>
                            @endif
                        </tbody>
                
                    </table>
        </div>
    </div>
@endsection