@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Institution: {{ $campus->name}}</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                
                <div align="left">
                    <button onclick="window.location.href='{{ route('campus.index') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Campus
                    </button>
                </div>

                <form action="{{ route('campus.update',['id' => $campus->id]) }}" method="post">
                            
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    
                    <div class="form-group">
                        <label for="campus">Campus Nmae</label>
                        <input type="text" class="form-control" value="{{$campus->name}}" name="name" id="name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">Campus Code</label>
                        <input type="text" class="form-control" value="{{$campus->code}}" name="code" id="code" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" required/>{{$campus->description}}</textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg" type="submit">Update</button>
                    </div>
                    <div><br/>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection