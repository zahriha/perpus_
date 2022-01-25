<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK DATA PEMINJAMAN</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Peminjaman</b></p>
        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" align="center" border="1px" id="dataTable" cellspacing="0">
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
                                                        Terlambat  {{ $durasi }} Hari
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

                                              
										</tr>
                                    </tbody>

										@endforeach
                       
                            </table>
                     </div>
      
                                       


        </table>


    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>