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
             <h2> TAMBAH DATA SURAT TUGAS</h2> 
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
              <form action="{{ route('surat-tugas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="nomor_surat"> <b> Nomor Surat</b> </label>
                        <input type="text" class="form-control"  name="nomor_surat" placeholder="Nomor Surat" value=" {{ old('nomor_surat') }}">
                      </div>
                      <div class="col-sm-6">
                        <label> <b>Tanggal Surat</b> </label>
                        <input type="date" class="form-control"  name="tanggal_surat" value=" {{ old('tanggal_surat') }}">
                      </div>

                    </div>

                    <div class="row mt-2">
                    <div class="col-sm-6 ">
                        <label><b>Tempat</b></label>
                        <input type="text" class="form-control"  name="tempat" placeholder="Perihal" value=" {{ old('tempat') }}">
                      </div>
                      <div class="col-sm-6">
                        <label> <b>Tanggal Tugas</b> </label>
                        <input type="date" class="form-control"  name="tanggal_tugas" value=" {{ old('tanggal_tugas') }}">
                      </div>

                      
                    </div>

                    <div class="row mt-2 ">
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label><b> Keterangan</b></label>
                          <textarea type="text" class="form-control"  name="keterangan" cols="40" rows="5" value="{{ old('keterangan') }}"></textarea>
                        </div>
                        </div>
                        <div class="col-sm-6 ">
                        <label><b>Perihal</b></label>
                        <input type="text" class="form-control"  name="perihal"  value=" {{ old('perihal') }}" placeholder="Perihal">
                      
                     </div>
                    </div>
                 <button type="Submit" class="btn btn-primary mt-2">Simpan</button>
              </form>
            </div>
          </div>
          </div>
          </div>
          
          {{-- end form --}}
          
    
@endsection