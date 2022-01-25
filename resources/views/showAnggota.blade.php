@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Edit Data Anggota</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/update/' . $data->id) }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Kode Anggota</label>
                    <input class="form-control" type="text" name="kode_anggota" value="{{$data->kode_anggota}}">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{$data->nama}}">
                </div>
                

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Gender</label>
                </div>
                <div class="form-check form-check-inline">
                    <label for="formFile" class="form-label">Laki-laki</label>
                    <input class="form-check-label" type="radio" name="jekel" value="L">

                    <label for="formFile" class="form-label">Perempuan</label>
                    <input class="form-check-label" type="radio" name="jekel" value="P">
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Jurusan</label>
                    <input class="form-control" type="text" name="jurusan" value="{{$data->jurusan}}">
                </div>       
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">HP</label>
                    <input class="form-control" type="number" name="hp" value="{{$data->hp}}">
                </div> 

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Alamat</label>
                    <textarea class="form-control" type="text" name="alamat" value="{{$data->alamat}}"></textarea
                </div> 

                
                <div class="form-floating mb-3">
 
                <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
                </div>

                <div class="form-floating mb-3">
 				<a href="{{url('/')}}" class="btn btn-primary btn-lg btn-block">Main Menu</a>
            </div>
            </form>
            </div>
        </div>
</div>  

</section>
@endsection