@extends('layout.fronted')

@section('title','Gallery')
 @section('content')  
 
 <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Project</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="home">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Galeri</li>
            </ol>
        </nav>
    </div>
</div>


  <div class="container">
    <h1>Galeri</h1>
    <div class="row g-3 mb-3">
      @foreach ($items as $item)
        <div class="col-sm-4 col-md-3">
          <div class="card">
            <div class="ratio ratio-16x9">
              <div class="overflow-hidden">
                <img src="{{ asset($item->foto) }}" alt="" class="img-fluid">
              </div>
            </div>
            <div class="card-body">
              <div class="small text-muted">{{ $item->nama }}</div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- PAGINATION --}}
    @if ($items->lastPage() > 1)
      {{ $items->links() }}
    @endif
  </div>
@endsection



  {{-- <!-- Projects Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Our Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">General Carpentry</li>
                    <li class="mx-2" data-filter=".second">Custom Carpentry</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">General Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">General Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">General Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End --> --}}
