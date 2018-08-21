@extends('layouts.app')

@section('content')

<div class="container">
    
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Marital Statues</a>
        </div>    
    </nav>
    <div class="row">
        <div class="col-md-4">
            
            <div class="panel panel default">
                <form role="form" action="{{route('marital.store')}}" method='post'>
                    {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                    <label for="categories">Statues</label>
                    <input type="text" class="form-control" name="categories" placeholder="Enter categories">
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <labe for="descriptions">Descriptions</label>
                        <textarea class="form-control" rows="10" name="descriptions" placeholder="Enter ..."></textarea>
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
                    <button type="button" class="btn btn-primary">Refresh Marital Statues list</button>
                    <table class="table table-bordered" id="marital-table">                        
                        <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Categories</th>
                                <th>Descriptions</th>
                                <th>Action</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($maritals as $marital)
                            <tr>
                                <th>{{ $marital -> id }}</th>
                                <th>{{ $marital -> categories }}</th>
                                <th>{{ $marital -> descriptions }}</th>
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

