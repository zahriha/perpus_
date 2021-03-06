@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Tambahkan Data Anggota</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/storeAnggota') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Kode Anggota</label>
                    <input class="form-control" type="text" name="kode_anggota">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Gender</label>
                </div>
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Laki-laki</label>
                    <input class="form-check-label" type="radio" name="jekel" value="L">

                    <label for="formFile" class="form-label">Perempuan</label>
                    <input class="form-check-label" type="radio" name="jekel" value="P">
                </div>



                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Jurusan</label>
                    <input class="form-control" type="text" name="jurusan">
                </div>  
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">HP</label>
                    <input class="form-control" type="number" name="hp">
                </div>  

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Alamat</label>
                    <textarea class="form-control" type="text" name="alamat"></textarea>
                </div>  

                
                <div class="form-floating mb-3">
 
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </div>

                <div class="form-floating mb-3">
 				<a href="{{url('/addAnggota')}}" class="btn btn-primary btn-lg btn-block">Main Menu</a>
            </div>
            </form>
			

            </div>


        </div>
</div>
       


</section>
@endsection
 