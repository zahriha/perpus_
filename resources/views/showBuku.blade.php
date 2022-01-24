@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Edit Data Buku</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/update/' . $data->id) }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Kode Buku</label>
                    <input class="form-control" type="text" name="kode_buku" value="{{$data->kode_buku}}">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Judul</label>
                    <input class="form-control" type="text" name="judul" value="{{$data->judul}}">
                </div>
                

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Penulis</label>
                    <input class="form-control" type="text" name="penulis" value="{{$data->penulis}}">
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Penerbit</label>
                    <input class="form-control" type="text" name="penerbit" value="{{$data->penerbit}}">
                </div>       
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Tahun</label>
                    <input class="form-control" type="number" name="tahun" value="{{$data->tahun}}">
                </div> 

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Stok</label>
                    <input class="form-control" type="text" name="stok" value="{{$data->stok}}">
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