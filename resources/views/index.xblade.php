@extends('template.layout')


@section('content')
<section>


<div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <h1>Hi, Selamat Datang</h1>
				<a href="{{url('/create')}}" class="btn btn-primary">+ Tambah Petugas</a>
                <table class="table-bordered">
				
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
												<a href="{{url('/show/' . $dataPetugas->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataPetugas->id) }}" class="btn btn-warning">Hapus</a>


												</td>
											
										</tr>
										@endforeach
				</table>
            </div>


        </div>
</div>
       


</section>
@endsection
 