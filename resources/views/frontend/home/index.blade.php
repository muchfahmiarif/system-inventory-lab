@extends('frontend.main')

@section('container')
<!-- Hero Start -->
<section class="home-slider position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="bg-home d-flex align-items-center" style="background: url('image/bg/laboratory-1.webp') top;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-12 text-center">
                                <div class="title-heading mt-4">
                                    <h4 class="display-3 fw-bold text-white title-dark mb-3">Analytical Development<br><span class="fs-3 text-primary">PT. Genero Pharmaceuticals</span></h4>
                                    <p class="text-white-50 mx-auto para-desc">Analytical Development is part of Genero Pharmaceuticals which is a department for the analysis of Erha products, external products and others.</p>
                                    <div class="mt-4 pt-2">
                                        <a href="/about" class="btn btn-lg btn-primary">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end slide-->
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <div class="bg-home d-flex align-items-center" style="background: url('image/bg/laboratory-2.webp') top;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-12 text-center">
                                <div class="title-heading mt-4">
                                    <img src="image/logo/genero-full.webp" height="260" alt="">
                                    <h3 class="fw-bold text-white title-dark mb-0 mt-4"><span class="">Reach A New Height. Together.</h3>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end slide-->
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <div class="bg-home d-flex align-items-center" style="background: url('image/bg/laboratory-3.webp') top;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-12 text-center">
                                <div class="title-heading mt-4">
                                    <h4 class="display-3 fw-bold text-white title-dark mb-3">Inventory Management System<br><span class="fs-3 text-primary">PT. Genero Pharmaceuticals</h4>
                                    <p class="text-white-50 mx-auto para-desc">An inventory management system is the combination of technology (hardware and software) and processes and procedures that oversee the monitoring and maintenance of stocked products, whether those products are company assets, raw materials and supplies, or finished products ready to be sent to vendors or end consumers.</p>
                                    
                                    <div class="mt-4 pt-2">
                                        <a href="/inventory" class="btn btn-lg btn-primary">Get Started</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end slide-->
            </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>
</section><!--end section-->
<!-- Hero End -->

<!-- FEATURES START -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="features-absolute">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features feature-primary rounded px-4 py-5 bg-white shadow border-0 d-flex align-items-center">
                                <div class="fea-icon rounded-circle bg-light text-dark">
                                  <i class="bi bi-cloud-check"></i>
                                </div>
    
                                <div class="content flex-1 ms-3">
                                    <a href="javascript:void(0)" class="title h5 text-dark">Cloud Storage</a>
                                    <p class="text-muted mt-2 mb-0">This prevents repetitive impairing the overall facilitates the comparison.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="features feature-primary rounded px-4 py-5 bg-white shadow border-0 d-flex align-items-center">
                                <div class="fea-icon rounded-circle bg-light text-dark">
                                  <i class="bi bi-clock"></i>
                                </div>
    
                                <div class="content flex-1 ms-3">
                                    <a href="javascript:void(0)" class="title h5 text-dark">Only Takes 10 seconds</a>
                                    <p class="text-muted mt-2 mb-0">This prevents repetitive impairing the overall facilitates the comparison.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 mt-4 pt-2">
                            <div class="features feature-primary rounded px-4 py-5 bg-white shadow border-0 d-flex align-items-center">
                                <div class="fea-icon rounded-circle bg-light text-dark">
                                  <i class="bi bi-hand-thumbs-up"></i>
                                </div>
    
                                <div class="content flex-1 ms-3">
                                    <a href="javascript:void(0)" class="title h5 text-dark">Powerful Performance</a>
                                    <p class="text-muted mt-2 mb-0">This prevents repetitive impairing the overall facilitates the comparison.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 mt-4 pt-2">
                            <div class="features feature-primary rounded px-4 py-5 bg-white shadow border-0 d-flex align-items-center">
                                <div class="fea-icon rounded-circle bg-light text-dark">
                                  <i class="bi bi-key"></i>
                                </div>
    
                                <div class="content flex-1 ms-3">
                                    <a href="javascript:void(0)" class="title h5 text-dark">Safe System</a>
                                    <p class="text-muted mt-2 mb-0">This prevents repetitive impairing the overall facilitates the comparison.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
      @include('frontend.about.section-1')
    </div><!--end container-->
</section><!--end section-->
<!-- FEATURES End -->

<!-- Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title fw-semibold mb-4">Latest Projects & Works</h4>
                    <p class="para-desc text-muted mx-auto mb-0">Explore and learn more about everything from machine learning and global payments to  scaling your team.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="tiny-five-item">
                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/01.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/01.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Leaf and Letter</a>
                                <small class="text-muted fw-normal mb-0">Branding</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/02.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/02.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Papers</a>
                                <small class="text-muted fw-normal mb-0">Designing</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/03.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/03.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Headphones</a>
                                <small class="text-muted fw-normal mb-0">Photography</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/04.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/04.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Projects</a>
                                <small class="text-muted fw-normal mb-0">Development</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/05.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/05.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Cup of Coffee</a>
                                <small class="text-muted fw-normal mb-0">Branding</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/06.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/06.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Pen and Books</a>
                                <small class="text-muted fw-normal mb-0">Designing</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/07.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/07.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Strawberry</a>
                                <small class="text-muted fw-normal mb-0">Photography</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/08.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/08.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Leaf and Books</a>
                                <small class="text-muted fw-normal mb-0">Development</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="tiny-slide">
                        <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                            <div class="card-img position-relative">
                                <img src="images/portfolio/09.jpg" class="img-fluid" alt="">
                                <div class="card-overlay"></div>

                                <div class="pop-icon">
                                    <a href="images/portfolio/09.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                            <div class="content pt-3">
                                <a href="portfolio-detail-one.html" class="text-dark h6 mb-0 d-block title">The Cactus Plant</a>
                                <small class="text-muted fw-normal mb-0">Branding</small>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h6 class="text-primary">Blogs</h6>
                    <h4 class="title fw-semibold mt-2 mb-3">Latest Blog & News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Our design projects are fresh and simple and will benefit your business greatly. Learn more about our work!</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog blog-primary shadow rounded overflow-hidden">
                    <div class="image position-relative overflow-hidden">
                        <img src="images/blog/01.jpg" class="img-fluid" alt="">

                        <div class="blog-tag">
                            <a href="javascript:void(0)" class="badge bg-light">Corporate</a>
                        </div>
                    </div>

                    <div class="card-body content">
                        <a href="blog-detail-five.html" class="h5 title text-dark d-block mb-0">Building Your Corporate Identity from Starty</a>
                        <p class="text-muted mt-2 mb-2">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>
                        <a href="blog-detail-five.html" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog blog-primary shadow rounded overflow-hidden">
                    <div class="image position-relative overflow-hidden">
                        <img src="images/blog/02.jpg" class="img-fluid" alt="">

                        <div class="blog-tag">
                            <a href="javascript:void(0)" class="badge bg-light">Branding</a>
                        </div>
                    </div>

                    <div class="card-body content">
                        <a href="blog-detail-five.html" class="h5 title text-dark d-block mb-0">The Dark Side of Overnight Success</a>
                        <p class="text-muted mt-2 mb-2">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>
                        <a href="blog-detail-five.html" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog blog-primary shadow rounded overflow-hidden">
                    <div class="image position-relative overflow-hidden">
                        <img src="images/blog/03.jpg" class="img-fluid" alt="">

                        <div class="blog-tag">
                            <a href="javascript:void(0)" class="badge bg-light">Technology</a>
                        </div>
                    </div>

                    <div class="card-body content">
                        <a href="blog-detail-five.html" class="h5 title text-dark d-block mb-0">The Right Hand of Business IT World</a>
                        <p class="text-muted mt-2 mb-2">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>
                        <a href="blog-detail-five.html" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->   
@endsection