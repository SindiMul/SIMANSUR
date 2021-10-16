@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html>

<head>
 @include('includes.style')
</head>

<body>

          <!-- start form -->
          <div class="container">
          <div class="card mt-3">
            <div class="card-header">
             <h2> TAMBAH DATA PEGAWAI</h2> 
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card-body">
              <div class="table-responsive">
              <form action="{{ route('data-pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                  <label for="nomor_surat"> <b> NIP </b> </label>
                  <input type="text" class="form-control"  name="nip" placeholder="NIP " value=" {{ old('nip') }}">
                  </div>

                  <div class="col-sm-6">
                  <label><b> Nama Petugas</b></label>
                    <input type="text" class="form-control"  name="nama_petugas" placeholder="Nama Pegawai" value=" {{ old('nama_petugas') }}">
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-6">
                  <label><b> Pangkat/Gol </b></label>
                    <input type="text" class="form-control"  name="pangkat" placeholder="Pangakat" value=" {{ old('pangkat') }}">
                  </div>
                  <div class="col-sm-6 ">
                    <label><b>Jabatan</b> </label>
                      <input type="text" class="form-control"  name="jabatan" placeholder="Jabatan" value=" {{ old('jabatan') }}">
                    </div>
                </div>
                <button type="Submit" class="btn btn-primary mt-2" >Simpan</button>
              </form>
            </div>
          </div>
          </div>
          </div>
          
          {{-- end form --}}
          
    
@endsection