@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Edit Data Buku</h1>
        <div class="row">
            <div class="col-lg-8">
			<form  action="{{ url('/update/' . $data->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Kode Buku</label>
                    <input class="form-control" type="text" name="nama" disabled value="{{$data->kode_buku}}">
                </div>
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Judul</label>
                    <input class="form-control" type="text" name="jabatan" value="{{$data->judul}}">
                </div>
                

                <div class="mb-3">
                    <label for="formFile" class="form-label">Penulis</label>
                    <input class="form-control" type="text" name="hp" value="{{$data->penulis}}">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Penerbit</label>
                    <input class="form-control" type="text" name="alamat" value="{{$data->penerbit}}">
                </div> 
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Tahun</label>
                    <input class="form-control" type="number" name="alamat" value="{{$data->tahun}}">
                </div> 

                <div class="mb-3">
                    <label for="formFile" class="form-label">Stok</label>
                    <input class="form-control" type="text" name="alamat" value="{{$data->stok}}">
                </div> 
                
                <div class="mb-3">
 
                <button class="btn-lg btn-primary" type="submit">Submit</button>
                </div>

                <div class="mb-3">
 				<a href="{{url('/')}}" class="btn btn-primary">Main Menu</a>
            </div>
            </form>
			

            </div>


        </div>
</div>
       


</section>
@endsection