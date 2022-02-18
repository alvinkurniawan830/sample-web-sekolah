@extends('layout.default')

@section('title','Home')
 @section('content')  

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            
        </div>
    </div>
    <!-- Spinner End -->


  

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="sample-image/Carousel1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">SMK</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="sample-image/Carousel2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">SMK</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.</p>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="sample-image/Carousel3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">SMK</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5">KOMPETENSI KEAHLIAN</h1>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                  <div class="card text-white mb-3 " style="min-width:100%; min-height:450px; border-radius:15%; background-color: #63B3ED">
                    <img class="card-img-top" src="sample-image/image.png" alt="" style="width: 200px; height: 200px;" >
                    <div class="card-body">
                      <h5 class="card-title">Jurusan</h5>
                      <p class="card-text">penjelasan</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="card text-white  mb-3" style="min-width:100%; min-height:450px; border-radius:15%; background-color: #F9DB5B" >
                      <img class="card-img-top" src="sample-image/image_2.png" alt="" style="width: 200px; height: 200px;" >
                      <div class="card-body">
                        <h5 class="card-title">Jurusan</h5>
                        <p class="card-text">penjelasan</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card text-white  mb-3" style="min-width:100%; min-height:450px; border-radius:15%; background-color: #FF5F64" >
                      <img class="card-img-top" src="sample-image/image_3.png" alt="" style="width: 200px; height: 200px;" >
                      <div class="card-body">
                        <h5 class="card-title">Jurusan</h5>
                        <p class="card-text">penjelasan</p>                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="card text-white mb-3" style="min-width:100%; min-height:450px; border-radius:15%; background-color: #10c350" >
                      <img class="card-img-top" src="sample-image/image_4.png" alt="" style="width: 200px; height: 200px;" >
                      <div class="card-body">
                        <h5 class="card-title">Jurusan</h5>
                        <p class="card-text">penjelasan</p>                       
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->



    <!-- About Start -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
          <div class="col">
             <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-graduate fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                        <p class="fw-medium mb-0">SISWA</p>
                    </div>
                </div>
             </div>
               </div>
               <div class="col">
                 <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="d-flex align-items-center">
                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                      <i class="fa fa-book  fa-2x text-primary"></i>
                      </div>
                      <div class="ms-3">
                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                        <p class="fw-medium mb-0">MATA PELAJARAN</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
              <div class="col-5">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                        <p class="fw-medium mb-0">GURU</p>
                    </div>
                </div>
              </div>
             </div>
              <div class="col">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="bi bi-people-fill fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                        <p class="fw-medium mb-0">KARYAWAN</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    
    <!-- Service End -->






    <!-- Back to Top -->
    <a href="Navbar" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
    @endsection