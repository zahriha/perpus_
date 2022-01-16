@extends('template.layout')


@section('content')
<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>
                    <a class="btn btn-primary" href="{{url('/createPetugas')}}">+ Tambah Petugas</a>
            

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>No</th>
										        <th>Nama</th>
												<th>Jabatan</th>
												<th>Hp</th>
												<th>Alamat</th>
												<th>Aksi</th>
                                        </tr>
                                        @foreach ($data as $dataPetugas)
										<tr>
												<td>{{ $dataPetugas->id}}</td>
												<td>{{ $dataPetugas->nama}}</td>
												<td>{{ $dataPetugas->jabatan}}</td>
												<td>{{ $dataPetugas->hp}}</td>
												<td>{{ $dataPetugas->alamat}}</td>
												<td>
												<a href="{{url('/showPetugas/' . $dataPetugas->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataPetugas->id) }}" class="btn btn-danger">Hapus</a>


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
 