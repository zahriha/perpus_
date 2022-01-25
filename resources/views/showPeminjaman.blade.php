@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Edit Data Peminjaman</h1>
        <div class="row">
            <div class="col-lg">
   
			<form  action="{{ route('update', $data->id) }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Tanggal Pinjam</label>
                    <input class="form-control" type="date" name="tgl_pinjam" value="{{$data->tgl_pinjam}}">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Tanggal Kembali</label>
                    <input class="form-control" type="date" name="tgl_kembali" value="{{$data->tgl_kembali}}">
                </div>
                
                <div class="form-floating mb-3">
                <label for="formFile" class="form-label">Buku</label>

                    <select class="form-control select2" style="width: 100%;" name="id_buku">
                    <option disabled value>Pilihan</option>
                    @foreach ($cbuku as $combo)
                    <option value="{{$combo->id}}">{{$combo->judul}}</option>

                    @endforeach          
                   </select>
                </div>

                <div class="form-floating mb-3">
                <label for="formFile" class="form-label">Anggota</label>
                    <select class="form-control select2" style="width: 100%;" name="id_anggota">
                    <option disabled value>Pilihan</option>
                    @foreach ($canggota as $combo)
                    <option value="{{$combo->id}}">{{$combo->nama}}</option>

                    @endforeach          
                   </select>
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Petugas</label>
                    <select class="form-control select2" style="width: 100%;" name="id_petugas">
              
                    <option>{{Auth::user()-> name}}</option>
                    
                            
                   </select>
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