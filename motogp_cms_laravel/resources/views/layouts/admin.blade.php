<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MotoGP Grid 2024</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384- T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
  <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none link-body-emphasis text-decoration-none pb-2">
            <span class="fs-4 justify-content-center">MotoGP Grid 2024</span>
        </a>
            <!-- NAV LINKS FOR HOME AND ADDING A NEW RIDER -->
            <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{route('riders.index')}}" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('riders.create')}}">Add New Rider</a>
            </li>
            <!-- DROP DOWN FOR MANUFACTURER -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Manufacturers
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('manufacturers.create')}}">Add New Manufacturer</a></li>
                <li><a class="dropdown-item" href="{{route('manufacturers.index')}}">Manufacturers List</a></li>
            </ul>
            </li>
            <!-- DROP DOWN FOR RIDER NATIONALITY -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Rider Nationalities
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('riders.it')}}">Italian Riders</a></li>
                <li><a class="dropdown-item" href="{{route('riders.sp')}}">Spanish Riders</a></li>
                <li><a class="dropdown-item" href="{{route('riders.fra')}}">French Riders</a></li>
                <li><a class="dropdown-item" href="{{route('riders.aus')}}">Australian Riders</a></li>
                <li><a class="dropdown-item" href="{{route('riders.sa')}}">South African Riders</a></li>
                <li><a class="dropdown-item" href="{{route('riders.por')}}">Portuguese Riders</a></li>
                <li><a class="dropdown-item" href="{{route('riders.jap')}}">Japanese Riders</a></li>
            </ul>
            </li>
            </ul>
        </header>
        </div>
    </div>
  </div>
  <div class="container-fluid mt-5">
    <div class="container"> 
        @yield('content')
    </div> 
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256- eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> <script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
    @if( Session::has('info'))
    toastr.info("{{ Session::get('info') }}") 
    @endif
    @if( Session::has('error'))
    toastr.info("{{ Session::get('error') }}")
    @endif 
  </script>
</body>
</html>