@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Institution: {{ $institute->name}}</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                
                <div align="left">
                    <button onclick="window.location.href='{{ route('institute.index') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Institute
                    </button>
                </div>

                <form action="{{ route('institute.update',['id' => $institute->id]) }}" method="post">
                            
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    
                    <div class="form-group">
                        <label for="institute">Institute Nmae</label>
                        <input type="text" class="form-control" value="{{$institute->name}}" name="name" id="name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">Institute Code</label>
                        <input type="text" class="form-control" value="{{$institute->code}}" name="code" id="code" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" required/>{{$institute->description}}</textarea>
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