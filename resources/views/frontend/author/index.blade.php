@extends('frontend.main')

@section('container')
  <!-- Hero Start -->
  <section class="bg-half-170 d-table w-100" style="background: url('../image/author.webp') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <small class="text-white-50 mb-1 fw-medium text-uppercase mx-auto">Get in touch</small>
                    <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">Contact us</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Starty</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section" >
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 text-center features feature-clean bg-transparent" >
                    <div class="icons text-primary text-center mx-auto" id="get-in-touch">
                      <i class="bi bi-telephone d-block rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-3">
                      <h5 class="footer-head">Phone</h5>
                      <p class="text-muted">Start working with us that can provide everything</p>
                      <a href="https://wa.me/6281291517036?text=I%27m%20interested%20in%20your%20services%20to%20create%20a%20website" class="text-foot">+62 812-9151-7036</a>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-clean bg-transparent">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="bi bi-envelope d-block rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-3">
                        <h5 class="footer-head">Email</h5>
                        <p class="text-muted">Start working with us that can provide everything</p>
                        <a href="mailto:fahmiarif96@gmail.com" class="text-foot">fahmiarif96@gmail.com</a>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-clean bg-transparent">
                    <div class="icons text-primary text-center mx-auto">
                      <i class="bi bi-geo-alt d-block rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-3">
                      <h5 class="footer-head">Location</h5>
                      <p class="text-muted">Jl. Beruang III No. 5 B6 <br>Cikarang Baru, Bekasi</p>
                      <a href="https://goo.gl/maps/Mi25eN2uVfPpLMKDA"
                            data-type="iframe" class="video-play-icon text-foot lightbox">View on Google map</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60" >
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title mb-5 pb-2 text-center">
                    <h4 class="title mb-3">Get In Touch !</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Our design projects are fresh and simple and will benefit your business greatly. Learn more about our work!</p>
                </div>
                <div class="custom-form">
                    <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                        <p id="error-msg" class="mb-0"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Name :">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                </div> 
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                        <input name="subject" id="subject" class="form-control" placeholder="Subject :">
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message :"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div><!--end custom-form-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-100 mt-60">
        <div class="row">
            <div class="col-12 p-0">
                <div class="card map border-0">
                    <div class="card-body p-0">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.403385950935!2d107.16420856688214!3d-6.314390151327211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b113b758eb5%3A0xd33643d4ae78680f!2zNsKwMTgnNTEuMSJTIDEwN8KwMDknNTAuOSJF!5e0!3m2!1sen!2sid!4v1664546021291!5m2!1sen!2sid" style="border:0" allowfullscreen>></iframe>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection