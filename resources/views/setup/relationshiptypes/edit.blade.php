@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 put-left">

<div class="row col-md-12 col-lg-12 col-sm-12 put-left" style="background:white; marige:10px;">
  <form method="post" action="{{ route('relationshiptypes.update', [$relationshiptype->id]) }}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="put">

              <div class="form-group"> 
                <label for="name">Edit Relationshiptypes Name:<span class="required">*</span></label>
                <input placeholder="Relationshiptypes name" class="form-control" required name="name" value="{{ $relationshiptype->name }}" />
              </div>
              <button class="btn-primary" type="submit" value="Submit">Update</button>    
          
  </form>
</div>
 

@endsection