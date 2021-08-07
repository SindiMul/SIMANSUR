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
      <div class="container-fluid">
        <div class="header-body">
          <!-- Breadcrumb -->
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">My Files</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-envelope text-primary"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Surat Masuk</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">My Files</li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route ('surat-masuk.create')}}" class="btn btn-sm btn-neutral">Tambah Data</a>
            </div>
          </div>
          <!-- End Breadcrumb -->
        </div>
      </div>
    </div>
    
@endsection