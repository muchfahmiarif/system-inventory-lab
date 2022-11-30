@extends('frontend.main')

@section('container')
<section class="bg-half-170 d-table w-100" style="background: url('../../image/inventory/standard.webp') center;">
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

      {{-- <a href="/inventory/location/{{ $standar->location->slug }}">{{ $standar->location->name }}</a>
      <a href="/inventory/brand/{{ $standar->trademark->slug }}">{{ $standar->trademark->name }}</a> --}}

      <div class="card blog blog-primary shadow rounded overflow-hidden">
        <div class="card-body content">
          <a href="javascript:void(0)" class="fs-2 text-muted">Name Working Standar : <span class="text-info">{{ $standar->name }}</span></a>

          <div class="row mx-0 pt-3">
            <div class="col-4">
              <p class="fs-6 mb-1">Catalog Number</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1 text-uppercase">: {{ $standar->catalog }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">Nama Working Standar</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->name }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">No. Batch</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1 text-uppercase">: {{ $standar->batch }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">Departement</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->departement }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">Isi Kemasan</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->contain }} mg</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">Brand</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->brand }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">Expired Date</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->expired }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">Lokasi Penyimpanan</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->storage }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1">No Penyimpanan</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1">: {{ $standar->number }}</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1 text-info">Buffer Stock</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1 text-info">: {{ $standar->stock }} pc</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1 text-warning">Openned</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1 text-warning">: {{ $standar->openned }} pc</p>
            </div>
          </div>

          <div class="row mx-0 pt-3">
            <div class="col-4 ">
              <p class="fs-6 mb-1 text-danger">Already Empty</p>
            </div>
            <div class="col-8 ">
              <p class="fs-6 mb-1 text-danger">: {{ $standar->outofstock }} pc</p>
            </div>
          </div>

          <div class="row mx-0 pt-2">
            <div>
              <p class="text-lowercase text-muted"><small><small> Last Change : <span class="text-info"> 2 hours ago </span> by : <span class="text-info">Fahmi</span></small></small></p>
            </div>
          </div>
        </div>


      </div>

      <div class="mt-4 pt-1 mx-0 d-flex justify-content-center gap-3">
        <a href="#" class="btn btn-md btn-primary ml-2">Download COA</a>
        <a href="/inventory/standard" class="btn btn-link text-warning">Back</a>
      </div>

    </div>
  </div>
</section>

@endsection