@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Region: {{ $region->name}}</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                
                <div align="left">
                    <button onclick="window.location.href='{{ route('region.index') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Region
                    </button>
                </div>

                <form action="{{ route('region.update',['id' => $region->id]) }}" method="post">
                            
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    <div class="form-group">
                        <label for="country">Country</label>
                        <Select name="country_id" id="country_id" class="form-control">
                            <option value="{{ $region->country_id }}">{{ $region->country_id }}</option>
                            @foreach($country as $country)
                            <option value="{{ $country->id }}"> {{ $country->name }} </option>
                            @endforeach
                        </Select>
                    </div>
                    <div class="form-group">
                        <label for="region">Region Nmae</label>
                        <input type="text" class="form-control" value="{{$region->name}}" name="name" id="name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">Region Code</label>
                        <input type="text" class="form-control" value="{{$region->code}}" name="code" id="code" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" required/>{{$region->description}}</textarea>
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