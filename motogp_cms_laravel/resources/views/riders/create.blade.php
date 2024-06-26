@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-3 mt-4 mb-4">Add Rider</h1>
        </div>
    </div>
    <form action="{{ route('riders.store') }}" method="POST">
        @if ($errors -> any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors -> all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
        </div>
        <div class="mb-3">
            <label for="team" class="form-label">Team</label>
            <input type="text" class="form-control" id="team" name="team" aria-describedby="team">
        </div>
        <div class="mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" aria-describedby="nationality">
        </div>
        <div class="mb-3">
            <label for="manufacturer_id" class="form-label">Manufacturer</label>
            {{-- <input type="number" class="form-control" id="manufacturer_id" name="manufacturer_id" aria-describedby="manufacturer_id"> --}}
            <select name="manufacturer_id" id="manufacturer_id">
            @foreach ($manufacturers as $manufacturer)
              <option value="{{ $manufacturer -> id }}">
                {{ $manufacturer -> manufacturer_name }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
            <label for="imageURL" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
        </div>
        <button type="submit" name="newRider" class="btn btn-primary">Submit</button>
    </form>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

@endsection
