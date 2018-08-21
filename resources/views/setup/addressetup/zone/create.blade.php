@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Zone</div>

                <div class="card-body">
                <form action="{{route('zone.store')}}" method="POST">
                
                    {{ csrf_field() }}
                    @include('layouts.message.error')
                    @include('layouts.message.success')
                    <div class="form-group">
                        <label for="region">Country</label>
                        <Select name="region_id" id="region_id" class="form-control">
                            <option value="">Select Region</option>
                            @foreach($region as $region)
                            <option value="{{ $region->id }}"> {{ $region->name }} </option>
                            @endforeach
                        </Select>
                    </div>

                    <div class="form-group">
                        <label for="country">Zone Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Zone Name" required />
                    </div>
                    <div class="form-group">
                        <label for="code">Zone Code</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Zone Code" required />
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