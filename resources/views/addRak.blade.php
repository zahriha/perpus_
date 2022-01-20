@extends('template.layout')


@section('content')
<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data Rak</h1>
                    <a class="btn btn-primary" href="{{url('/createRak')}}">+ Tambah Rak</a>
            

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
										        <th>Nama Rak</th>
												<th>Lokasi</th>
												<th>Judul Buku</th>
												<th>Aksi</th>
                                        </tr>
                                        @foreach ($data as $dataRak)
										<tr>
												<td>{{ $dataRak->id}}</td>
												<td>{{ $dataRak->nama}}</td>
												<td>{{ $dataRak->letak}}</td>
                                                <td>{{ $dataRak->judul_buku}}</td>
												<td>
												<a href="{{url('/showRak/' . $dataRak->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataRak->id) }}" class="btn btn-danger">Hapus</a>
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
 