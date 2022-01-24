@extends('template.layout')


@section('content')

<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data User</h1>
                    <a class="btn btn-primary" href="{{url('/createUser')}}">+ Tambah User</a>
            

<!-- DataTales Example -->
<div class="card shadow mb-4">
                    <div class="card-header py-3">
                    
                            <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                    </div>   
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>No</th>
										        <th>Nama</th>
												<th>Email</th>
                                                <th>Password</th>
												<th>Aksi</th>
                                        </tr>
                                        </thead>
                                        @foreach ($data as $dataUser)
                                    <tbody>
                                        <tr>
												<td>{{ $dataUser->id}}</td>
												<td>{{ $dataUser->name}}</td>
												<td>{{ $dataUser->email}}</td>
                                                <td>{{ $dataUser->password}}</td>
                                               

                                                                 
												<td>
												<a href="{{url('/showUser/' . $dataUser->id) }}" class="btn btn-warning">Edit</a>
												<a href="{{url('/destroy/' . $dataUser->id) }}" class="btn btn-danger">Hapus</a>
												</td>
											
										</tr>
                                        </tbody>

										@endforeach
                       
                            </table>
                     </div>
                     
             </div>
           
</div>
   
</section>


@endsection
