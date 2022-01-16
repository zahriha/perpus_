@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Tambahkan Data Petugas</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/storePetugas') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Jabatan</label>
                    <input class="form-control" type="text" name="jabatan">
                </div>
                

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">HP</label>
                    <input class="form-control" type="number" name="hp">
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat">
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                            

                
                <div class="form-floating mb-3">
 
                <button class="btn-lg btn-primary" type="submit">Submit</button>
                </div>

                <div class="form-floating mb-3">
 				<a href="{{url('/addPetugas')}}" class="btn btn-primary">Main Menu</a>
            </div>
            </form>
			

            </div>


        </div>
</div>
       


</section>
@endsection
 