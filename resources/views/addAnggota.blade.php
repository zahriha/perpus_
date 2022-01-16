@extends('template.layout')


@section('content')
<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data Anggota</h1>
                    <a class="btn btn-primary" href="{{url('/createAnggota')}}">+ Tambah Anggota</a>
            

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
										        <th>Kode Anggota</th>
												<th>Nama</th>
												<th>Gender</th>
												<th>Jurusan</th>
                                                <th>HP</th>
												<th>Alamat</th>
												<th>Aksi</th>
                                        </tr>
                                        @foreach ($data as $dataAnggota)
										<tr>
												<td>{{ $dataAnggota->id}}</td>
												<td>{{ $dataAnggota->kode_anggota}}</td>
												<td>{{ $dataAnggota->nama}}</td>
												<td>{{ $dataAnggota->jekel}}</td>
												<td>{{ $dataAnggota->jurusan}}</td>
                                                <td>{{ $dataAnggota->hp}}</td>
												<td>{{ $dataAnggota->alamat}}</td>
												<td>
												<a href="{{url('/showAnggota/' . $dataAnggota->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataAnggota->id) }}" class="btn btn-danger">Hapus</a>


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
 