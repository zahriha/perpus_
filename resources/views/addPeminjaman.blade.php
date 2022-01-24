@extends('template.layout')


@section('content')

<section>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Data Peminjaman</h1>
                    <a class="btn btn-primary" href="{{url('/createPeminjaman')}}">+ Tambah Peminjaman</a>
            

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
										        <th>Tanggal Pinjam</th>
												<th>Tanggal Kembali</th>
												<th>Buku</th>
                                                <th>Anggota</th>
                                                <th>Petugas</th>
                                                <th>Durasi Peminjaman</th>
                                                <th>Denda</th>
												<th>Aksi</th>
                                        </tr>
                                        </thead>
                                        @foreach ($data as $dataPeminjaman)
                                    <tbody>
                                        <tr>
												<td>{{ $dataPeminjaman->id}}</td>
												<td>{{ $dataPeminjaman->tgl_pinjam}}</td>
												<td>{{ $dataPeminjaman->tgl_kembali}}</td>
                                                <td>{{ $dataPeminjaman->id_buku}}</td>
                                                <td>{{ $dataPeminjaman->id_anggota}}</td>
                                                <td>{{ $dataPeminjaman->id_petugas}}</td>

                                                <td>
                                                    <?php 
                                                        $datetime2 = strtotime($dataPeminjaman->tgl_kembali) ;
                                                        $datenow = strtotime(date("Y-m-d"));
                                                        $durasi = ($datetime2 - $datenow) / 86400 ;
                                                    ?>
                                                     @if ($durasi < 0 )
                                                        Durasi Habis / {{ $durasi }} Hari
                                                     @else
                                                        {{ $durasi }} Hari
                                                     @endif
                                                </td>

                                                <td>
                                                     @if ($durasi < 0)
                                                        <?php $denda = abs($durasi) * 1000 ; ?>
                                                            {{ $denda }}
                                                    @else
                                                         0
                                                    @endif
                                                </td>

                                              
												<td>
												<a href="{{url('/showPeminjaman/' . $dataPeminjaman->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{url('/destroy/' . $dataPeminjaman->id) }}" class="btn btn-danger">Kembalikan Buku</a>

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
