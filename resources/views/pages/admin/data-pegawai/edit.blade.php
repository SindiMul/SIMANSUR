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
             <h2> EDIT DATA SURAT MASUK</h2> 
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
              <form action="{{ route('data-pegawai.update',  $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                  <label for="nomor_surat"> <b> NIP </b> </label>
                  <input type="text" class="form-control"  name="nip" placeholder="NIP " value=" {{$item->nip}} ">
                  </div>

                  <div class="col-sm-6">
                  <label><b> Nama Petugas</b></label>
                    <input type="text" class="form-control"  name="nama_petugas" placeholder="Nama Pegawai" value="  {{$item->nama_petugas}}">
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-6">
                  <label><b> Pangkat </b></label>
                    <input type="text" class="form-control"  name="pangkat" placeholder="Pangakat" value=" {{ $item->pangkat }}">
                  </div>
                  <div class="col-sm-6 ">
                    <label><b>Jabatan</b> </label>
                      <input type="text" class="form-control"  name="jabatan" placeholder="Jabatan" value=" {{ $item->jabatan }}">
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