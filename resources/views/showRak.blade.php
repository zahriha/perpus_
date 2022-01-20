@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Edit Data Rak</h1>
        <div class="row">
            <div class="col-lg-8">
			<form  action="{{ url('/update/' . $data->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Nama Rak</label>
                    <input class="form-control" type="text" name="nama" value="{{$data->nama}}">
                </div>
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Lokasi Rak</label>
                    <input class="form-control" type="text" name="letak" value="{{$data->letak}}">
                </div>
                

                <div class="form-floating mb-3">
                    <select class="form-control select2" style="width: 100%;" name="judul_buku">
                    <option disabled value>Pilihan</option>
                    @foreach ($cbuku as $combo)
                    <option value="{{$combo->id}}">{{$combo->judul}}</option>

                    @endforeach
                    

                    </select>
                </div>
   
                                              
                <div class="mb-3">
 
                <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
                </div>

                <div class="mb-3">
 				<a href="{{url('/')}}" class="btn btn-primary btn-lg btn-block">Main Menu</a>
            </div>
            </form>
            </div>
        </div>
</div>  

</section>
@endsection