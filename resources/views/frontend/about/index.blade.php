@extends('frontend.main')

@section('container')

  <!-- Hero Start -->
  <section class="bg-half-170 d-table w-100" style="background: url('image/about-page/genero.webp') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Who we are?</small>
                    <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">About Our Company</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
          <nav aria-label="breadcrumb" class="d-block">
            <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ul>
          </nav>
        </div>
    </div><!--end container-->
  </section><!--end section-->
  <!-- Hero End -->

  <!-- Start -->
  <section class="section">
      <div class="container">
        @include('frontend.about.section-1')
      </div><!--end container-->

      {{-- Service section --}}
      <div class="container mt-100 mt-60">
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6">
                  <div class="card shadow p-4 rounded features features-classic feature-primary">
                    <i class="uil uil-airplay h1 mb-0 text-primary"></i>
                    <div class="content my-3 border-bottom">
                        <a href="page-single-service.html" class="title h5 text-dark">Developing strategy</a>
                        <p class="text-muted mt-3">It is said that song composers of the past used dummy texts as lyrics when writing to sing with the melody.</p>
                    </div>
                    <a href="page-single-service.html" class="d-flex align-items-center justify-content-between">
                        <span class="fw-medium text-dark">Read More</span>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                  </div>
              </div><!--end col-->

              <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                  <div class="card shadow p-4 rounded features features-classic feature-primary">
                      <i class="uil uil-atom h1 mb-0 text-primary"></i>

                      <div class="content my-3 border-bottom">
                          <a href="page-single-service.html" class="title h5 text-dark">Blazing performance</a>

                          <p class="text-muted mt-3">It is said that song composers of the past used dummy texts as lyrics when writing to sing with the melody.</p>
                      </div>

                      <a href="page-single-service.html" class="d-flex align-items-center justify-content-between">
                          <span class="fw-medium text-dark">Read More</span>
                          <i class="bi bi-chevron-right"></i>
                      </a>
                  </div>
              </div><!--end col-->

              <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-lg-0 pt-lg-0">
                  <div class="card shadow p-4 rounded features features-classic feature-primary">
                      <i class="uil uil-users-alt h1 mb-0 text-primary"></i>

                      <div class="content my-3 border-bottom">
                          <a href="page-single-service.html" class="title h5 text-dark">Customer satisfaction</a>

                          <p class="text-muted mt-3">It is said that song composers of the past used dummy texts as lyrics when writing to sing with the melody.</p>
                      </div>

                      <a href="page-single-service.html" class="d-flex align-items-center justify-content-between">
                          <span class="fw-medium text-dark">Read More</span>
                          <i class="bi bi-chevron-right"></i>
                      </a>
                  </div>
              </div><!--end col-->
          </div><!--end row-->
      </div><!--end container-->

      {{-- Vidio youtube section --}}
      <div class="container-fluid px-0 mt-100 mt-60">
          <div class="bg-half-260" style="background: url('image/about-page/about-2.webp') top;">
              <div class="bg-overlay"></div>
              <div class="play-icon">
                  <a href="javascript:void(0)" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                      <i class="bi bi-play-fill text-primary rounded-circle bg-white shadow"></i>
                      
                  </a>
              </div>
          </div>
      </div><!--end container-->

      {{-- Pujian section --}}
      <div class="container mt-100 mt-60">
          <div class="row justify-content-center">
              <div class="col-lg-9">
                  <div class="tiny-single-item">
                      <div class="tiny-slide px-md-5">
                          <div class="card client-testi text-center">
                              <img src="images/client/01.jpg" class="avatar avatar-small rounded-pill mx-auto" alt="">
                              <div class="card-body pb-0 content">
                                  <p class="h5 fw-normal text-muted fst-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                                  <div class="name mt-4">
                                      <small class="text-uppercase fw-semibold d-block">Johnny Rosario</small>
                                      <small class="text-muted">C.E.O</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide px-md-5">
                          <div class="card client-testi text-center">
                              <img src="images/client/02.jpg" class="avatar avatar-small rounded-pill mx-auto" alt="">
                              <div class="card-body pb-0 content">
                                  <p class="h5 fw-normal text-muted fst-italic">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others - which creates a distinct visual impression. "</p>
                                  <div class="name mt-4">
                                      <small class="text-uppercase fw-semibold d-block">Gale Larose</small>
                                      <small class="text-muted">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide px-md-5">
                          <div class="card client-testi text-center">
                              <img src="images/client/03.jpg" class="avatar avatar-small rounded-pill mx-auto" alt="">
                              <div class="card-body pb-0 content">
                                  <p class="h5 fw-normal text-muted fst-italic">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces. "</p>
                                  <div class="name mt-4">
                                      <small class="text-uppercase fw-semibold d-block">Shelly Goodman</small>
                                      <small class="text-muted">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><!--end col-->
          </div><!--end row-->
      </div><!--end container-->

      <!-- Partners start -->
      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-lg-2 col-md-2 col-6 text-center">
                  <img src="images/client/logo-1.svg" class="img-fluid" alt="">
              </div><!--end col-->

              <div class="col-lg-2 col-md-2 col-6 text-center">
                  <img src="images/client/logo-2.svg" class="img-fluid" alt="">
              </div><!--end col-->
              
              <div class="col-lg-2 col-md-2 col-6 text-center">
                  <img src="images/client/logo-3.svg" class="img-fluid" alt="">
              </div><!--end col-->
              
              <div class="col-lg-2 col-md-2 col-6 text-center">
                  <img src="images/client/logo-4.svg" class="img-fluid" alt="">
              </div><!--end col-->
              
              <div class="col-lg-2 col-md-2 col-6 text-center">
                  <img src="images/client/logo-5.svg" class="img-fluid" alt="">
              </div><!--end col-->
              
              <div class="col-lg-2 col-md-2 col-6 text-center">
                  <img src="images/client/logo-6.svg" class="img-fluid" alt="">
              </div><!--end col-->
          </div><!--end row-->
      </div><!--end container-->
      <!-- Partners End -->

      <div class="container-fluid mt-100 mt-60">
          <div class="row">
              <div class="col-12 px-0">
                  <div class="tiny-six-item">
                      <div class="tiny-slide">
                          <div class="card team team-primary">
                              <div class="card-img">
                                  <img src="images/client/09.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>
                              <div class="team-content">
                                  <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white title-dark">Dennis Rosario</a>
                                  <small class="text-white title-dark">C.E.O</small>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide">
                          <div class="card team team-primary">
                              <div class="card-img">
                                  <img src="images/client/10.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>
                              <div class="team-content">
                                  <div class="name">
                                      <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white title-dark">Billy Gregory</a>
                                      <small class="text-white title-dark">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide">
                          <div class="card team team-primary">
                              <div class="card-img">
                                  <img src="images/client/11.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>
                              <div class="team-content">
                                  <div class="name">
                                      <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white title-dark">Connie Dunton</a>
                                      <small class="text-white title-dark">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide">
                          <div class="card team team-primary">
                              <div class="card-img">
                                  <img src="images/client/12.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>
                              <div class="team-content">
                                  <div class="name">
                                      <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white title-dark">Alberta Petty</a>
                                      <small class="text-white title-dark">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide">
                          <div class="card team team-primary">
                              <div class="card-img">
                                  <img src="images/client/13.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>
                              <div class="team-content">
                                  <div class="name">
                                      <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white title-dark">Shirley Garcia</a>
                                      <small class="text-white title-dark">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="tiny-slide">
                          <div class="card team team-primary">
                              <div class="card-img">
                                  <img src="images/client/14.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>
                              <div class="team-content">
                                  <div class="name">
                                      <a href="javascript:void(0)" class="h6 name text-uppercase d-block mb-0 text-white title-dark">Michael Wheeler</a>
                                      <small class="text-white title-dark">Manager</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><!--end col-->
          </div><!--end row-->
      </div><!--end container-->
  </section><!--end section-->
  <!-- End -->

@endsection