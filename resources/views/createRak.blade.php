@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Tambahkan Data Rak</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/storeRak') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Nama Rak</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Lokasi Rak</label>
                    <input class="form-control" type="text" name="letak">
                </div>
                

                <div class="form-floating mb-3">
                     <label for="formFile" class="form-label">Buku</label>
                    <select class="form-control select2" style="width: 100%;" name="judul_buku">
                    <option disabled value>Pilihan</option>
                    @foreach ($cbuku as $combo)
                    <option value="{{$combo->id}}">{{$combo->judul}}</option>

                    @endforeach
                    

                    </select>
                </div>

                                
                <div class="form-floating mb-3">
 
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </div>

                <div class="form-floating mb-3">
 				<a href="{{url('/addRak')}}" class="btn btn-primary btn-lg btn-block">Main Menu</a>
            </div>
            </form>
			
            </div>

        </div>
</div>
       
</section>
@endsection
 