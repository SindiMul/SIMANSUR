@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html>

<head>
 @include('includes.style')
</head>

<body>
  <!-- Sidebar -->
  {{-- @include('includes.sidebar') --}}
  <!-- End Sidebar -->

  <!-- Main -->
  {{-- <div class="main-content" id="panel"> --}}
    <!-- Navbar  -->
    {{-- @include('includes.navbar') --}}
    <!-- End Navbar  -->

    <!-- Konten -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid mt--3">
        <div class="header-body">
          <!-- Breadcrumb -->
          <div class="row align-items-center py-6">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">My Files</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-envelope-open text-primary"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route ('surat-masuk.index')}}">Surat Masuk</a></li>
                  <li class="breadcrumb-item"><a href="#">Disposisi</a></li>
                  
                </ol>
              </nav>
            </div>
            <div class="col-lg-5 col-5 text-right">
              <a href="{{route ('disposisi-create', $smasuk)}}" class="btn btn-sm btn-neutral">Tambah Data
                 </a>
            </div>
          </div>
          <!-- End Breadcrumb -->
          <div class="container-fluid mt--6">
            <div class="row">
              <div class="col">
                <div class="card">
                  <!-- Card header -->
                  <div class="card-header border-0">
                    <h3 class="mb-0">Disposisi</h3>
                  </div>
      
                  <!-- My Files -->
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="name">Nomor Surat</th>
                          <th scope="col" class="sort" data-sort="name">Tujuan Surat</th>
                          <th scope="col" class="sort" data-sort="date">Tgl surat</th>
                          <th scope="col" class="sort" data-sort="name">Perihal</th>
                          <th scope="col" class="sort" data-sort="time">File</th>
                          <th scope="col" class="sort" data-sort="name">tembusan</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($disp as $items)
                        <tr>
                          <th>{{ $smasuk-> nomor_surat }}</th>
                          <th>{{ $smasuk-> tujuan_surat}}</th>
                          <th>{{ $smasuk-> tanggal_surat}}</th>
                          <th>{{ $smasuk-> perihal }}</th>
                          <th>{{ $smasuk-> file }}</th>
                          <th>{{ $items-> tembusan }}</th>
                          <th><a class="btn btn-primary btn-sm my-1 mr-sm-1"
                                        href="{{ route('disposisi.download', [$smasuk, $items->id]) }}"
                                        target="_blank" role="button"><i class="fas fa-print"></i> Cetak</a></th>
                         
                        </tr>
              @empty
                  <td colspan="7" class="text-center">
                      Data Kosong
                  </td>
              @endforelse
                        </tbody>
                      
                    </table>
                  </div>
        </div>
      </div>
    </div>
    
@endsection