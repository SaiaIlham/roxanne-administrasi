@extends('master')
@section('content') 
<!-- ---------------------------------------------------ISI-------------------------------------------------- -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PASIEN</h1>
                    <p class="mb-4"> Halaman ini berisi data-data pasien</p>

                    <!-- Top Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a class="rounded-pill btn btn-primary btn-xl" href="pasiencreate">Add Pasien +</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Nomor Telepon</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->nama_pasien}}</td>
                                            <td>{{$row->jenis_kelamin}}</td>
                                            <td>{{$row->alamat}}</td>
                                            <td>{{$row->tanggal_lahir}}</td>
                                            <td>{{$row->nomor_telepon}}</td>
                                            <td>{{$row->email}}</td>
                                            
                                            <td>
                                                <a href="/tampilkanpasien/{{ $row->id }}" class="btn btn-primary">Detail</a>
                                                <a href="/tampilmasuk/{{ $row->id }}" class="btn btn-warning">Edit</a>
                                                <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Detail Modal -->

            <!-- Delete Modal-->
            <div class="modal fade" id="deletepasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">HAPUS PASIEN</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Anda yakin ingin menghapus pasien ini ?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- End of Delate Modal -->

             <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
            </a>

<!-- ---------------------------------------------------BATAS ISI---------------------------------------------------->

           
@endsection