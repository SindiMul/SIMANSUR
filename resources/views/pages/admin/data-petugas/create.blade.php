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
              <form action="{{ route('data-petugas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="surat_tugas_id">Tempat Tugas</label>
                  <select name="surat_tugas_id" required class="form-control">
                  <option value="">Pilih Tempat Tugas</option>
                  @foreach ($surat_tugas as $surat_tugas)
                    <option value="{{ $surat_tugas->id }}">
                    {{ $surat_tugas->tempat }}
                    </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="data_pegawai_id">Nama Pegawai</label>
                  <select name="data_pegawai_id" required class="form-control">
                  <option value="">Pilih Pegawai</option>
                  @foreach ($data_pegawai as $data_pegawai)
                    <option value="{{ $data_pegawai->id }}">
                    {{ $data_pegawai->nama_petugas }}
                    </option>
                    @endforeach
                    </select>
                </div>
                <button type="Submit" class="btn btn-primary mt-2" >Simpan</button>
              </form>
            </div>
          </div>
          </div>
          </div>
          
          {{-- end form --}}
          
    
@endsection