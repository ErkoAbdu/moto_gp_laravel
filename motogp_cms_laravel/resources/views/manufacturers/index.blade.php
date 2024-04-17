@extends('layouts/admin')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($manufacturers as $manufacturer)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $manufacturer -> imageURL }}" class="card-img-top" alt="MotoGP Manufacturer Logo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $manufacturer -> manufacturer_name }}</h5>
                    </div>
                    <div class="card-footer d-flex display-flex:row justify-content-center">
                        <a href="{{ route('manufacturers.edit', $manufacturer -> id ) }}" class="btn btn-sm btn-info m-1">Edit</a>
                        <a href="{{ route('manufacturers.trash', $manufacturer -> id ) }}" class="btn btn-sm btn-danger m-1">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection