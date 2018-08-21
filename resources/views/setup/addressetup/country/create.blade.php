@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Country</div>

                <div class="card-body">
                <form action="{{route('country.store')}}" method="POST">
                
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    
                    <div class="form-group">
                        <label for="country">country Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="country Name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">country Code</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="country Code" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" placeholder="Description aboute country" required/></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-danger" type="reset">Clear</button>
                    </div>
                    <div><br/></br/></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection