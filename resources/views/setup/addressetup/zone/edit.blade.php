@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Zone: {{ $zone->name}}</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                
                <div align="left">
                    <button onclick="window.location.href='{{ route('zone.index') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Region
                    </button>
                </div>

                <form action="{{ route('zone.update',['id' => $zone->id]) }}" method="post">
                            
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    <div class="form-group">
                        <label for="region">Country</label>
                        <Select name="region_id" id="region_id" class="form-control">
                            <option value="{{ $zone->region_id }}">{{ $zone->region_id }}</option>
                            @foreach($region as $region)
                            <option value="{{ $region->id }}"> {{ $region->name }} </option>
                            @endforeach
                        </Select>
                    </div>
                    <div class="form-group">
                        <label for="region">zone Nmae</label>
                        <input type="text" class="form-control" value="{{$zone->name}}" name="name" id="name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">zone Code</label>
                        <input type="text" class="form-control" value="{{$zone->code}}" name="code" id="code" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" required/>{{$zone->description}}</textarea>
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