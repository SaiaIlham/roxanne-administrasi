@extends('master')
@section('content') 
<body>
    <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- Page Heading -->
        <h1><span class="badge rounded-pill bg-primary text-white">Add Pasien +</span></h1>
        <p class="mb-4"> Halaman ini untuk menambahkan data pasien</p>

        <!-- from -->
        <div class="card shadow mb-4">
        <form enctype="multipart/form-data" action="/insertdata" method="POST">
            @csrf
        <div class="container">
            <br>
        </form>
        <div class="input-group mb-3">
            <span for="nama_pasien" class="input-group-text" id="nama_pasien">Nama</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama_pasien">
        </div>
        <div class="input-group mb-3">
        <label for="jenis_kelamin" class="input-group-text" >Jenis Kelamin</label>
        <select class="form-control" id="jenis-kelamin" name="jenis_kelamin">
            <option selected>Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
        </select>
        </div>
        <div class="input-group mb-3">
            <span for="nama_pasien" class="input-group-text" id="alamat_pasien">Alamat</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="alamat">
        </div>
        <div class="input-group mb-3">
            <span for="tanggal_lahir" class="input-group-text" id="tanggal_lahir">Tanggal Lahir</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tanggal_lahir">
        </div>  
        <div class="input-group mb-3">
            <span for="nomor_telepon" class="input-group-text" id="nomor_telepon">Nomor Telepon</span>
            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nomor_telepon">
        </div>
        <div class="input-group mb-3">
            <span for="email" class="input-group-text" id="email">E-Mail</span>
            <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email">
        </div>
       
      
        <button type="submit" class="btn btn-success col-2">Save</button>
        <br>
        <br>

        </div>
        <!-- End of Main Content -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a> 


</body>
@endsection
