@extends('layouts.app')

@section('content')

<div class="container">
    
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Staffs Position </a>
        </div>    
    </nav>
    <div class="row">
        <div class="col-md-4">
            
            <div class="panel panel default">
                <form role="form" action="{{route('staffs.store')}}" method='post'>
                    {{csrf_field()}}                    
                <div class="box-body">
                    <div class="form-group">
                    <label for="categories">Position</label>
                    <input type="text" class="form-control" name="categories" placeholder="Enter categories">
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <label for="descriptions">Descriptions</label>
                        <textarea class="form-control" name="descriptions" rows="10" placeholder="Type..."></textarea>
                    </div>
                    </div>               
                    
                </div>                
                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="reset" class="btn btn-warning">Clear</button>
                </form>
            </div>
        </div>
        <div class="col-md-6" >
        <div class="panel panel default">
                    <button type="button" class="btn btn-primary">Refresh Staffs Position list</button>
                    <table class="table table-bordered table-striped table-condensed">                        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Position</th>
                                <th>Descriptions</th>
                                <th>Action</th>                                
                            </tr>
                        </thead>                    
                        <tbody> 
                        @foreach($staff as $staf)
                            <tr>
                                <th>{{ $staf -> id }}</th>
                                <th>{{ $staf -> categories }}</th>
                                <th>{{ $staf -> descriptions }}</th>
                                <th></th>             
                            </tr>
                        @endforeach 
                                        
                        </tbody>
                    </table>
        </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop