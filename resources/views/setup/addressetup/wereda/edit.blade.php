@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Wereda: {{ $wereda->name}}</div>

                <div class="card-body">
                            @include('layouts.message.error')
                            @include('layouts.message.success')
                
                <div align="left">
                    <button onclick="window.location.href='{{ route('wereda.index') }}'" style="margin-top: 7px;" class="btn btn-success">
                    Add New Wereda
                    </button>
                </div>

                <form action="{{ route('wereda.update',['id' => $wereda->id]) }}" method="post">
                            
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    <div class="form-group">
                        <label for="region">Zone</label>
                        <Select name="zone_id" id="zone_id" class="form-control">
                            <option value="{{ $wereda->zone_id }}">{{ $wereda->zone_id }}</option>
                            @foreach($zone as $zone)
                            <option value="{{ $zone->id }}"> {{ $zone->name }} </option>
                            @endforeach
                        </Select>
                    </div>
                    <div class="form-group">
                        <label for="region">Wereda Nmae</label>
                        <input type="text" class="form-control" value="{{$wereda->name}}" name="name" id="name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">Wereda Code</label>
                        <input type="text" class="form-control" value="{{$wereda->code}}" name="code" id="code" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Discription</label>
                        <textarea name="description" id="description" cols="5" rows="4" class="form-control" required/>{{$wereda->description}}</textarea>
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