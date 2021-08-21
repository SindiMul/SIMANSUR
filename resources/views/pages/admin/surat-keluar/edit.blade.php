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
             <h2> EDIT DATA SURAT KELUAR</h2> 
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
              <form action="{{ route('surat-masuk.update',  $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                  <label for="nomor_surat"> <b> Nomor Surat</b> </label>
                  <input type="text" class="form-control"  name="nomor_surat" placeholder="Nomor Surat" value=" {{ $item->nomor_surat}}">
                  </div>

                  <div class="col-sm-6">
                  <label> <b>Tanggal Surat</b> </label>
                    <input type="date" class="form-control"  name="tanggal_surat" value=" {{ $item->tanggal_surat }}">
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-6">
                  <label><b> Tujuan Surat</b></label>
                    <input type="text" class="form-control"  name="tujuan_surat" placeholder="Tujuan Surat" value=" {{ $item->tujuan_surat }}">
                  </div>
                  <div class="col-sm-6 ">
                  <label><b>Perihal</b> </label>
                    <input type="text" class="form-control"  name="perihal" placeholder="Perihal" value=" {{ $item->perihal }}">
                  </div>
                  
                </div>

                <div class="row mt-2 ">
                  <div class="col-sm-6">
                   <div class="form-group">
                  <label><b> Keterangan</b></label>
                  <textarea class="form-control"  name="keterangan" cols="40" rows="5" placeholder="keterangan" value=" {{ $item->keterangan }}"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                  <label> <b>Pilih file yang ingin diupload</b> </label>
                  <input type="file" class="form-control-file" name="file">
                </div>
                </div>
              </div>                
                <button type="Submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
          </div>
          </div>
          
          {{-- end form --}}
          
    
@endsection