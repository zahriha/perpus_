@extends('template.layout')


@section('content')
<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
                    <a class="btn btn-primary" href="{{url('/createBuku')}}">+ Tambah Buku</a>
            

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
										        <th>Kode Buku</th>
												<th>Judul</th>
												<th>Penulis</th>
												<th>Penerbit</th>
                                                <th>Tahun Terbit</th>
												<th>Stok</th>
												<th>Aksi</th>
                                        </tr>
                                        @foreach ($data as $dataBuku)
										<tr>
												<td>{{ $dataBuku->id}}</td>
												<td>{{ $dataBuku->kode_buku}}</td>
												<td>{{ $dataBuku->judul}}</td>
												<td>{{ $dataBuku->penulis}}</td>
												<td>{{ $dataBuku->penerbit}}</td>
                                                <td>{{ $dataBuku->tahun}}</td>
												<td>{{ $dataBuku->stok}}</td>
												<td>
												<a href="{{url('/showBuku/' . $dataBuku->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataBuku->id) }}" class="btn btn-danger">Hapus</a>


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
 