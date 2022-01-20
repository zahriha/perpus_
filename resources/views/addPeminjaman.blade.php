@extends('template.layout')


@section('content')
<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data Peminjaman</h1>
                    <a class="btn btn-primary" href="{{url('/createPeminjaman')}}">+ Tambah Peminjaman</a>
            

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                    
                            <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>No</th>
										        <th>Tanggal Pinjam</th>
												<th>Tanggal Kembali</th>
												<th>Buku</th>
                                                <th>Anggota</th>
                                                <th>Petugas</th>
												<th>Aksi</th>
                                        </tr>
                                        @foreach ($data as $dataPeminjaman)
										<tr>
												<td>{{ $dataPeminjaman->id}}</td>
												<td>{{ $dataPeminjaman->tgl_pinjam}}</td>
												<td>{{ $dataPeminjaman->tgl_kembali}}</td>
                                                <td>{{ $dataPeminjaman->id_buku}}</td>
                                                <td>{{ $dataPeminjaman->id_anggota}}</td>
                                                <td>{{ $dataPeminjaman->id_petugas}}</td>

												<td>
												<a href="{{url('/showPeminjaman/' . $dataPeminjaman->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataPeminjaman->id) }}" class="btn btn-danger">Hapus</a>
												</td>
											
										</tr>
										@endforeach
                                    </thead>
                               
                                </table>
                            </div>
                        </div>
                    </div>
       


</section>
@endsection
 