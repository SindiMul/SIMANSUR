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
             <h2> EDIT DATA SURAT TUGAS</h2> 
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
              <form action="{{ route('surat-tugas.update') }}" method="POST" >
                @csrf
               
                
                  
                <div class="row">
                  <div class="col-sm-6">
                  <label for="nomor"> <b> Nomor Surat</b> </label>
                  <input type="text" class="form-control"  name="nomor" placeholder="Nomor Surat" value=" {{ $item->nomor}}">
                  </div>
                 

                  <div class="col-sm-6">
                  <label><b>Perihal</b></label>
                    <input type="text" class="form-control"  name="perihal" placeholder="Asal Surat" value=" {{ $item->perihal }}">
                  </div>
                  </div>
                  
                  <div class="row mt-2">
                  <div class="col-sm-6">
                  <label> <b>Dasar</b> </label>
                  <textarea class="form-control"  name="dasar" cols="40" rows="5" placeholder="dasar" value=" {{ $item->dasar }}"></textarea>
                  </div>
                
                  <div class="col-sm-6">
                  <label><b>Hari</b></label>
                    <input type="DATE" class="form-control"  name="hari" placeholder="Asal Surat" value=" {{ $item->'hari' }}">
                  </div>
                  </div>

                  <div class="row mt-2">
                  <div class="col-sm-6 ">                  
                  <label><b>Jam</b></label>
                    <input type="text" class="form-control"  name="pukul" placeholder="Asal Surat" value=" {{ $item->pukul }}">
                  </div>
               
                  <div class="col-sm-6">
                  <label><b>Tempat</b></label>
                    <input type="text" class="form-control"  name="tempat" placeholder="Asal Surat" value=" {{ $item->tempat }}">
                  </div>
                </div>
                  <div class="form-group">
                        <label for="ttd_id">Penanda Tangan</label>
                        <select name="ttd_id" required class="form-control"  >
                            <option value="">Pilih </option>
                            @foreach ($data_pegawai as $pegawai)
                    <option value="{{ $pegawai->id }}">
                    {{ $pegawai->nama_petugas }}
                    </option>
                    @endforeach
                        </select>
                    </div>
                <div class="form-group">
                        <label for="data_pegawai_id">Nama Pegawai</label>
                        <select name="data_pegawai_id[]" required class="form-control"  >
                            <option value="">Pilih </option>
                            @foreach ($data_pegawai as $pegawai)
                    <option value="{{ $pegawai->id }}">
                    {{ $pegawai->nama_petugas }}
                    </option>
                    @endforeach
                        </select>
                    </div>
                 
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-3 ">
                    <a href="#" class="addpe btn btn-success form-control">tambah</a>
                  </div>
                </div>
 

                <div class="petugas"></div>
                <button type="Submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
          </div>
          </div>
          
          {{-- end form --}}
          <script src="{{ url ('backend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
          <script type="text/javascript">
          $(".addpe").on('click', function(){
            addpe();
          });
          function addpe(){
            var surat='<div><div class="form-group"><label for="data_pegawai_id">Nama Pegawai</label><select name="data_pegawai_id[]" required class="form-control"><option value="">Pilih </option>@foreach($data_pegawai as $pegawai)<option value="{{ $pegawai->id }}">{{  $pegawai->nama_petugas  }}</option>@endforeach</select></div></div>';
            $('.petugas').append(surat);
             };
          
          
          </script>
    
@endsection





