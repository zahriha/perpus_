@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Edit Data User</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/update/' . $data->id) }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="name" value="{{$data->name}}">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" value="{{$data->email}}">
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" value="{{$data->password}}">
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