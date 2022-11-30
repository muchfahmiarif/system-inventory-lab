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
      <div class="">
        {{-- Table Starts --}}
        <div class="table">
          <table class="table table-hover">
            {{-- <h2 class="text-dark">{{ $location }}</h2> --}}
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
                  <a href="/inventory/standard/{{ $standar->batch }}" class="fs-5"><i class="bi bi-folder-symlink"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{-- Table End --}}
        <div class="mt-4 pt-1 mx-0 d-flex justify-content-center gap-3">
          <a href="/inventory/standard" class="btn btn-link text-warning">Back</a>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection