@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-3 mt-4 mb-4">Add Manufacturer</h1>
        </div>
    </div>
    <form action="{{ route('manufacturers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="manufacturer_name" class="form-label">Manufacturer Name</label>
            <input type="text" class="form-control" id="manufacturer_name" name="manufacturer_name" aria-describedby="manufacturer_name">
        </div>
        <div class="mb-3">
            <label for="imageURL" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
        </div>
        <button type="submit" name="newManufacturer" class="btn btn-primary">Submit</button>
    </form>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

@endsection
