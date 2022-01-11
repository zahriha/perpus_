@extends('layouts.default')

@section('content')
<section>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <h1>Hi, Selamat Datang</h1>
				<a href="{{url('create')}}" class="btn btn-primary">+ Tambah Petugas</a>
                <table class="table-bordered" style="width:60%">
				
									 	<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Jabatan</th>
												<th>Hp</th>
												<th>Alamat</th>
												<th>Aksi</th>
												
												
											</tr>
</table>
            </div>


        </div>
</div>
       


</section>
@endsection
 