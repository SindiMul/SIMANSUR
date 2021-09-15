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
                  <li class="breadcrumb-item"><a href="#">Data Pegawai</a></li>
                  
                </ol>
              </nav>
            </div>
            <div class="col-lg-5 col-5 text-right">
              <a href="{{route ('data-pegawai.create')}}" class="btn btn-sm btn-neutral">Tambah Data
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
                    <h3 class="mb-0">Data Pegawai</h3>
                  </div>
      
                  <!-- My Files -->
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                        <th scope="col" class="sort" data-sort="name">NIP</th>
                          <th scope="col" class="sort" data-sort="name">Nama Petugas</th>
                          <th scope="col" class="sort" data-sort="name">Pangkat</th>
                          <th scope="col" class="sort" data-sort="name">Jabatan</th>
                          <th scope="col" class="sort" data-sort="name">Action</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($items as $item)
                        <tr>
                        <th>{{ $item-> nip }}</th>
                          <th>{{ $item-> nama_petugas }}</th>
                          <th>{{ $item-> pangkat }}</th>
                          <th>{{ $item-> jabatan }}</th>
                          
                          <th>
                              <a href="{{ route('data-pegawai.edit', $item->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a>
                              <form action="{{ route('data-pegawai.destroy', $item->id) }}" method="post" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              </form>
                          </th>
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