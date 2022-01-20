<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use App\Models\Peminjaman;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Peminjaman::with('buku','anggota','petugas')->paginate();    
        return view('/addPeminjaman', compact('data'));
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
        $cpetugas=Petugas::all();    
        return view('createPeminjaman', compact('cbuku','canggota','cpetugas'));
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
        return redirect('/addPeminjaman'); 
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
        $cpetugas=Petugas::all();  
        $data=Peminjaman::findOrFail($id);
        return view('/showPeminjaman', compact('data','cbuku','canggota','cpetugas'));
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
        $cpetugas=Petugas::all();     
        $dataEdit=Rak::findOrFail($id);
        $data=$request->except(['_token']);
        $dataEdit->update($data);
        return redirect('/addRak');
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
        return redirect('/addPeminjaman');
    }
}
