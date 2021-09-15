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
             <h2> TAMBAHKAN DISPOSISI </h2> 
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
              <form action="{{ route('disposisi.store', $smasuk) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                  <label> <b>Tanggal Penyelesaian</b> </label>
                    <input type="date" class="form-control"  name="tanggal_penyelesaian" value=" {{ old('tanggal_penyelesaian') }}">
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-sm-6">
                  <label><b> Tujuan Surat</b></label>
                    <input type="text" class="form-control"  name="tujuan_surat" placeholder="Asal Surat" value=" {{ old('tujuan_surat') }}">
                  </div>
                </div>
                
                <div class="row mt-2">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><b> Keterangan</b></label>
                      <textarea type="text" class="form-control"  name="keterangan" cols="40" rows="5" value="{{ old('keterangan') }}"></textarea>
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