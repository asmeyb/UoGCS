@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Region</div>

                <div class="card-body">
                <form action="{{route('region.store')}}" method="POST">
                
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    <div class="form-group">
                        <label for="country">Country</label>
                        <Select name="country_id" id="country_id" class="form-control">
                            <option value="">Select Country</option>
                            @foreach($country as $country)
                            <option value="{{ $country->id }}"> {{ $country->name }} </option>
                            @endforeach
                        </Select>
                    </div>

                    <div class="form-group">
                        <label for="country">Region Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Region Name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">Region Code</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Region Code" required />
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