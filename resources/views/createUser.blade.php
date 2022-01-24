@extends('template.layout')

@section('content')
<section>
<div class="container-fluid">
	<h1>Tambahkan Data User</h1>
        <div class="row">
            <div class="col-lg">
			<form  action="{{ url('/storeUser') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="name">
                </div>
                
                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-floating mb-3">
                    <label for="formFile" class="form-label">Email</label>
                    <input class="form-control" type="password" name="password">
                </div>
                

                                
                <div class="form-floating mb-3">
 
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </div>

                <div class="form-floating mb-3">
 				<a href="{{url('/addUser')}}" class="btn btn-primary btn-lg btn-block">Main Menu</a>
            </div>
            </form>
			
            </div>

        </div>
</div>
       
</section>
@endsection
 