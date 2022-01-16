@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Tambahkan Data Buku</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/storeBuku') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Kode Buku</label>
                    <input class="form-control" type="text" name="kode_buku">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Judul Buku</label>
                    <input class="form-control" type="text" name="judul">
                </div>
                

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Penulis</label>
                    <input class="form-control" type="text" name="penulis">
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Penerbit</label>
                    <input class="form-control" type="text" name="penerbit">
                </div>  
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Tahun Terbit</label>
                    <input class="form-control" type="number" name="tahun">
                </div>  

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Stok</label>
                    <input class="form-control" type="number" name="stok">
                </div>  

                
                <div class="form-floating mb-3">
 
                <button class="btn-lg btn-primary" type="submit">Submit</button>
                </div>

                <div class="form-floating mb-3">
 				<a href="{{url('/addBuku')}}" class="btn btn-primary">Main Menu</a>
            </div>
            </form>
			

            </div>


        </div>
</div>
       


</section>
@endsection
 