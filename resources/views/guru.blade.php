@extends('layout.default')
 
@section('title','Guru')
 @section('content')  
<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
          
      </div>
  </div>
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown ">DAFTAR GURU</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="home">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Guru</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



  <h1>Daftar Guru</h1>
  <div class="row g-3">
    @foreach ($items as $item)
      <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}" class="img-fluid">
          </div>
          <div class="text-center">{{ $item->nama }}</div>
          <div class="text-muted small text-center">{{ $item->jabatan }}</div>
        </div>
      </div>
    @endforeach

  </div>
@endsection
