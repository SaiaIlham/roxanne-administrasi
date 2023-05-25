@extends('master')
@section('content') 

<!-- ---------------------------------------------------ISI-------------------------------------------------- -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PRODUK</h1>
                    <p class="mb-4"> Halaman ini berisi data-data produk</p>

                    <!-- Top Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a class="rounded-pill btn btn-primary btn-xl" href="produk-create">Add Produk +</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Jumlah_Produk</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->kode_produk}}</td>
                                            <td>{{$row->nama_produk}}</td>
                                            <td>{{$row->deskripsi_produk}}</td>
                                            <td>{{$row->jumlah_produk}}</td>
                                            <td>{{$row->harga_produk}}</td>
                                            <td>
                                                
                                                <a data-target="#detailproduk" data-toggle="modal" class="btn btn-primary">Detail</a>

                                                <a href="{{route('produk-edit')}}"><button type="button" class="btn btn-warning">Edit</button></a>

                                                <a data-target="#deleteproduk" data-toggle="modal" class="btn btn-danger">Delete</button></a>

                                                <!-- Detail Modal-->
                                                <div class="modal fade" id="detailproduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                             <!-- from Detail-->
                                                             <div class="card shadow mb-4">
                                                                <form>
                                                                    <div class="container">
                                                                        <br>
                                                                        <form>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text" id="">Kode Produk</span>
                                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text" id="">Nama Produk</span>
                                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text" id="">Deskripsi Produk</span>
                                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                        <label class="input-group-text" >Jenis</label>
                                                                        <select class="form-control" id="jeniskelamin">
                                                                            <option selected>-</option>
                                                                            <option value="1">Obat</option>
                                                                            <option value="2">Produk</option>
                                                                        </select>
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text" id="t">Stok Produk</span>
                                                                            <input type="number" max="100" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-text" id="t">Harga Produk</span>
                                                                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                    </div>
                                                                </form>      
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
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
            <div class="modal fade" id="deleteproduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">HAPUS PRODUK</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Anda yakin ingin menghapus produk ini ?</div>
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