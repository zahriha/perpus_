<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;

use App\Models\Peminjaman;
use RealRashid\SweetAlert\Facades\Alert;




class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Peminjaman::with('buku','anggota')->paginate();    
        return view('/addPeminjaman', compact('data'));
    }

    public function cetakdata()
    {
        $data=Peminjaman::with('buku','anggota')->get();    
        return view('/cetak', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cbuku=Buku::all();    
        $canggota=Anggota::all();       
        return view('createPeminjaman', compact('cbuku','canggota'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except(['_token']);
        Peminjaman::insert($data);

        $stok = Buku::find($request->id_buku);
        if ($stok->stok <= 0 ) {
            session()->flash('Maaf Stock Buku Habis', 'danger');

            return redirect()->back();
        }
     

        $book = Buku::find($request->id_buku);
        $book->stok = $book->stok - 1 ; 
        $book->save();


        return redirect('/addPeminjaman')->with('toast-success', 'Data Berhasil Ditambah'); 
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cbuku=Buku::all();    
        $canggota=Anggota::all();  

        $data=Peminjaman::findOrFail($id);
        return view('/showPeminjaman', compact('data','cbuku','canggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cbuku=Buku::all(); 
        $canggota=Anggota::all();  
          
        $dataEdit=Peminjaman::findOrFail($id);
        $data=$request->except(['_token']);
        $dataEdit->update($data);
        return redirect('/addPeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataEdit=Peminjaman::findOrFail($id);
        $dataEdit->delete();
        $book = Buku::find($dataEdit->id_buku);
        $book->stok = $book->stok + 1 ;
        $book->save();


        return redirect('/addPeminjaman');
    }
}
