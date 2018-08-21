@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Student Type: {{ $category->category}}</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                
                <div align="left">
                    <button onclick="window.location.href='{{ route('studenttype.index') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Student Type
                    </button>
                </div>

                <form action="{{ route('studenttype.update',['id' => $category->id]) }}" method="post">
                            
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    
                    <div class="form-group">
                        <label for="category">Student Type</label>
                        <input type="text" class="form-control" value="{{$category->category}}" name="category" id="category" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" required/>{{$category->description}}</textarea>
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