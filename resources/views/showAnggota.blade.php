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
                    <input class="form-control" type="text" name="jekel" value="{{$data->jekel}}">
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
                    <input class="form-control" type="text" name="alamat" value="{{$data->alamat}}">
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