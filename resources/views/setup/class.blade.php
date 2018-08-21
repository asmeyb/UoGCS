@extends('layouts.app')

@section('content')

<div class="container">
    
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Class / Rooms </a>
            
        </div>  
         
    </nav>
    <hr> 
    <div class="row">
        <div class="col-md-4">
           
            <div class="panel panel default">
                <form role="form" action="{{route('room.store')}}" method='post'>
                    {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                   
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                    <label for="institution">Institution</label>
                    <input type="text" class="form-control" name="institution" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                    <label for="campus">Campus</label>
                    <input type="text" class="form-control" name="campus" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                    <label for="building">Building</label>
                    <input type="text" class="form-control" name="building" placeholder="Enter...">
                    </div>
                    <div class="form-group">
                    <label for="roomNumber">Room</label>
                    <input type="text" class="form-control" name="roomNumber" placeholder="Enter...">
                    </div>
                                                 
                    
                </div>                
                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="reset" class="btn btn-warning">Clear</button>
                </form>
            </div>
        </div>
        <div class="col-md-6" >
        <div class="panel">
            <button type="button" class="btn btn-primary">Refresh class list</button>   
            <table class="table table-striped" id="class-">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Institution</th>
                        <th>Campus</th>
                        <th>Building</th>
                        <th>R#</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                    <tr>
                        <th>{{ $room -> id }}</th>
                        <th>{{ $room -> name }}</th>
                        <th>{{ $room -> institution }}</th>
                        <th>{{ $room -> campus }}</th>
                        <th>{{ $room -> building }}</th>
                        <th>{{ $room -> roomNumber }}</th>
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

<script>
  $(function () {
    $('#class-table').DataTable()    
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,   
  });
</script>



