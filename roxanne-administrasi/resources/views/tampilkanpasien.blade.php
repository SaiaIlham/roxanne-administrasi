@extends('master')
@section('content') 
<body>
<form  enctype="multipart/form-data" class="form" action="" method="POST" class="form">
    @csrf 
    <div class="form-group">
      
        <label for="nomor_surat">Nama</label>
        <input type="text" name="nomor_surat" name="nomor_surat" id="nomor_surat" class="form-control" required value="{{ $data->nama_pasien }}">
    </div>

    <div class="form-group">
        <label for="pengirim">jenis_kelamin</label>
        <input type="text" name="pengirim" id="pengirim" class="form-control" required value="{{ $data->jenis_kelamin }}">
    </div>

    <div class="form-group">
        <label for="perihal">Alamat</label>
        <input type="text" name="perihal" id="perihal" class="form-control" required value="{{ $data->alamat }}">
    </div>

    <div class="form-group">
        <label for="kategori">tanggal_lahir</label>
        <input type="text" name="kategori" id="kategori" class="form-control" required value="{{ $data->tanggal_lahir }}">
    </div>

    <div class="form-group">
        <label for="tanggal">nomor_telepon</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" required value="{{ $data->nomor_telepon}}">
    </div>

    <div class="form-group">
        <label for="keterangan">gmail</label>
        <textarea name="keterangan" id="keterangan" class="form-control">@if(isset($data)){{ $data->gmail }}@endif</textarea>
    </div>
   <button>  <a href="" onclick="window.print()">Cetak</a></button>
</form>


<html>
<head>
</body>
@endsection
