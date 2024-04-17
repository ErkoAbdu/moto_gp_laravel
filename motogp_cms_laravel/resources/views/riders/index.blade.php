@extends('layouts/admin')
@section('content')
  <div class="container">
    <div class="row">
      @foreach ($riders as $rider)
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ $rider -> imageURL }}" class="card-img-top" alt="MotoGP rider">
            <div class="card-body">
              <h5 class="card-title">{{ $rider -> fname }} {{ $rider -> lname }}</h5>
              <p class="card-text"><strong>Team</strong>: {{ $rider -> team }}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Nationality</strong>: {{ $rider -> nationality }}</li>
              <li class="list-group-item"><strong>Manufacturer</strong>: {{ $rider -> manufacturer_name }}</li>
            </ul>
            <div class="card-footer d-flex display-flex:row justify-content-center">
              <a href="{{ route('riders.edit', $rider -> id ) }}" class="btn btn-sm btn-info m-1">Edit</a>
              <a href="{{ route('riders.trash', $rider -> id ) }}" class="btn btn-sm btn-danger m-1">Delete</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
