@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 put-left">

<div class="row col-md-12 col-lg-12 col-sm-12 put-left" style="background:white; marige:10px;">
  <form method="post" action="{{ route('relationshiptypes.store') }}">
              {{csrf_field()}}
              

              <div class="form-group"> 
                <label for="name">Add Relationshiptypes: </label>
                <input placeholder="Relationshiptypes name" class="form-control" required name="name" />
              </div>
              <button class="btn-primary" type="submit" value="Submit">Add New Relationshiptypes</button>    
          
  </form>
</div>
 

@endsection