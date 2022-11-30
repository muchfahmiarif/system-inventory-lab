@extends('frontend.main')

@section('container')
<section class="bg-half-170 d-table w-100" style="background: url('../image/inventory/alat-gelas.webp') center;">
  <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
      <div class="row mt-5 justify-content-center">
        <div class="col-12">
          <div class="title-heading text-center">
            <h5 class="heading fw-semibold page-heading text-white title-dark">Inventory Alat Gelas</h5>
            <p class="text-white-50 para-desc mx-auto mb-0">This is the page for glassware inventory</p>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- <section class="section">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="card blog blog-primary shadow rounded overflow-hidden">
          <div class="card-body content">
            <a href="javascript:void(0)" class="fs-2 text-muted">Nama Alat Gelas : <span class="text-info">Labu Amber 100 mL</span></a>
            <div class="row mx-0 pt-3">
              <div class="col-4">
                <p class="fs-6 mb-1">Catalog Number</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: Syalala</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Nama Alat Gelas</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: Cyanocobalamin</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Type</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: Clear</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Departement</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: Andev</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Lokasi Penyimpanan</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: Desikator</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Isi Kemasan</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: 1000 mg</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Brand</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: Sigma Aldrich</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1">Expired Date</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1">: 31 Desember 2023</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1 text-info">Buffer Stock</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1 text-info">: 5 pc</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1 text-warning">Openned</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1 text-warning">: 2 pc</p>
              </div>
            </div>

            <div class="row mx-0 pt-3">
              <div class="col-4 ">
                <p class="fs-6 mb-1 text-danger">Already Empty</p>
              </div>
              <div class="col-8 ">
                <p class="fs-6 mb-1 text-danger">: 10 pc</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4 pt-1 mx-0 d-flex justify-content-center">
          <a href="#" class="btn btn-md btn-primary ml-2">Download COA</a>
        </div>
      </div>

      <div class="col-4 ">
        <div class="sidebar sticky-bar ms-lg-4">
            <!-- SEARCH -->
            <div class="widget">
                <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Search</h6>
                <div id="search2" class="widget-search mt-4 mb-0">
                    <form role="search" method="get" id="searchform" class="searchform">
                        <div>
                            <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
            <!-- SEARCH -->

            <!-- CATAGORIES -->
            <div class="widget mt-4 pt-2">
                <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Catagories</h6>
                <ul class="list-unstyled mt-4 mb-0 catagories">
                    <li class="d-flex justify-content-between"><a href="javascript:void(0)" class="title text-dark">Finance</a> <span>13</span></li>
                    <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)" class="title text-dark">Business</a> <span>09</span></li>
                    <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)" class="title text-dark">Blog</a> <span>18</span></li>
                    <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)" class="title text-dark">Corporate</a> <span>20</span></li>
                    <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)" class="title text-dark">Investment</a> <span>22</span></li>
                </ul>
            </div>
            <!-- CATAGORIES -->

            <!-- RECENT POST -->
            <div class="widget mt-4 pt-2">
                <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
                <div class="mt-4">
                    <div class="d-flex align-items-center">
                        <img src="images/blog/01.jpg" class="avatar avatar-small rounded" style="width: auto;" alt="">
                        <div class="flex-1 ms-3">
                            <a href="javascript:void(0)" class="d-block title text-dark">Consultant Business</a>
                            <span class="text-muted">15th April 2021</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <img src="images/blog/02.jpg" class="avatar avatar-small rounded" style="width: auto;" alt="">
                        <div class="flex-1 ms-3">
                            <a href="javascript:void(0)" class="d-block title text-dark">Grow Your Business</a>
                            <span class="text-muted">15th April 2021</span>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mt-3">
                        <img src="images/blog/03.jpg" class="avatar avatar-small rounded" style="width: auto;" alt="">
                        <div class="flex-1 ms-3">
                            <a href="javascript:void(0)" class="d-block title text-dark">Look On The Glorious Balance</a>
                            <span class="text-muted">15th April 2021</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RECENT POST -->

            <!-- TAG CLOUDS -->
            <div class="widget mt-4 pt-2 text-center">
                <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded">Tags Cloud</h6>
                <div class="tagcloud mt-4">
                    <a href="javascript:void(0)" class="rounded text-dark">Business</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Finance</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Marketing</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Fashion</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Bride</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Lifestyle</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Travel</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Beauty</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Video</a>
                    <a href="javascript:void(0)" class="rounded text-dark">Audio</a>
                </div>
            </div>
            <!-- TAG CLOUDS -->
        </div>
      </div>

    </div>
  </div>
</section> --}}

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-8">
        {{-- Table Starts --}}
        <div class="table">
          <table class="table table-hover">
            <thead class="">
              <tr>
                <th scope="col" class="text-dark text-center align-middle text-wrap">No.</th>
                <th scope="col" class="text-dark text-center align-middle text-wrap">No. Katalog</th>
                <th scope="col" class="text-dark text-center align-middle text-wrap">Nama Standard</th>
                <th scope="col" class="text-dark text-center align-middle text-wrap">No. Batch</th>
                <th scope="col" class="text-dark text-center align-middle text-wrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($glasswares as $glassware)
              <tr>
                <td class="text-dark text-center align-middle text-wrap">{{ $loop->iteration }}</td>
                <td class="text-dark text-center align-middle text-wrap">{{ $glassware->catalog }}</td>
                <td class="text-dark text-center align-middle text-wrap">{{ $glassware->name }}</td>
                <td class="text-dark text-center align-middle text-wrap">{{ $glassware->batch }}</td>
                <td class="text-dark text-center align-middle text-wrap">
                  {{-- <a href="/inventory/standard/{{ $glassware->batch }}" class="fs-5"><i class="bi bi-folder-symlink"></i></a> --}}
                  <li class="list-unstyled">
                    <a href="/inventory/standard/{{ $glassware->batch }}" class="fs-5"><i class="bi bi-folder-symlink"></i></a>
                  </li>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{-- Table End --}}
      </div>

      <div class="col-4 ">
        <div class="sidebar sticky-bar ms-lg-4">
          <!-- SEARCH -->
          <div class="widget">
              <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Search</h6>
              <div id="search2" class="widget-search mt-4 mb-0">
                  <form role="search" method="get" id="searchform" class="searchform">
                      <div>
                          <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                          <input type="submit" id="searchsubmit" value="Search">
                      </div>
                  </form>
              </div>
          </div>
          <!-- SEARCH -->

          <!-- Location -->
          <div class="widget mt-4 pt-2">
              <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Location</h6>
              <ul class="list-unstyled mt-4 mb-0">
                @foreach ($glasswares as $glassware)
                <li class="d-flex justify-content-between mt-2"><a href="/inventory/location/{{ $glassware->color->slug }}" class="title text-dark">{{ $glassware->color->name }}</a> <span class="text-danger">13</span></li>
                @endforeach
              </ul>
          </div>
          <!-- Location -->
        </div>
      </div>

    </div>
  </div>
</section>

@endsection