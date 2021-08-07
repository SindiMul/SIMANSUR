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
    {{-- <div class="header bg-primary pb-6">
      < class="container-fluid">
        < class="header-body"> --}}
          <!-- Breadcrumb -->
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  {{-- <li class="breadcrumb-item"><a href="#"><i class="fas fa-envelope text-primary"></i></a></li> --}}
                  <li class="breadcrumb-item"><a href="#">Tambah Surat Masuk</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">My Files</li> -->
                </ol>
              </nav>
            </div>
          </div>
          <!-- End Breadcrumb -->
          <div class="card shadow">
            <div class="card body">
        <div class="form-group col-lg-3">
          <label for="nomor surat">Nomor Surat</label>
          <input type="text" class="form-control" name="nomor surat" placeholder="Masukan Nomor Surat">
        </div>
      </div>
    </div>
    
@endsection