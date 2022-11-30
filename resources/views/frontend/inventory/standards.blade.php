@extends('frontend.main')

@section('container')

<section class="bg-half-170 d-table w-100" style="background: url('../image/inventory/standard.webp') center;">
  <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
      <div class="row mt-5 justify-content-center">
        <div class="col-12">
          <div class="title-heading text-center">
            <h5 class="heading fw-semibold page-heading text-white title-dark">Working Standar</h5>
            <p class="text-white-50 para-desc mx-auto mb-0">Our Latest Blog and News in Grid Layouts with Sidebar</p>
          </div>
        </div>
      </div>
    </div>
</section>


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
              @foreach ($standards as $standar)
              <tr>
                <td class="text-dark text-center align-middle text-wrap">{{ $loop->iteration }}</td>
                <td class="text-dark text-center align-middle text-wrap">{{ $standar->catalog }}</td>
                <td class="text-dark text-center align-middle text-wrap">{{ $standar->name }}</td>
                <td class="text-dark text-center align-middle text-wrap">{{ $standar->batch }}</td>
                <td class="text-dark text-center align-middle text-wrap">
                  {{-- <a href="/inventory/standard/{{ $standar->batch }}" class="fs-5"><i class="bi bi-folder-symlink"></i></a> --}}
                  <li class="list-unstyled">
                    <a href="/inventory/standard/{{ $standar->batch }}" class="fs-5"><i class="bi bi-folder-symlink"></i></a>
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
                @foreach ($standards as $standar)
                <li class="d-flex justify-content-between mt-2"><a href="/inventory/location/{{ $standar->location->slug }}" class="title text-dark">{{ $standar->location->name }}</a> <span class="text-danger">13</span></li>
                @endforeach
              </ul>
          </div>
          <!-- Location -->
          <!-- Manufacturer -->
          <div class="widget mt-4 pt-2">
            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Manufacturer</h6>
            <ul class="list-unstyled mt-4 mb-0">
              @foreach ($standards as $standar)
              <li class="d-flex justify-content-between mt-2"><a href="/inventory/brand/{{ $standar->trademark->slug }}" class="title text-dark">{{ $standar->trademark->name }}</a> <span class="text-danger">13</span></li>
              @endforeach
            </ul>
          </div>
          <!-- Manufacturer -->
        </div>
      </div>

    </div>
  </div>
</section>


@endsection