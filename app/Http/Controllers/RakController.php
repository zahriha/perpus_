<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Rak;
use App\Models\Buku;


class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Rak::all();
        return view('/addRak')->with([
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cbuku=Buku::all();    
        return view('createRak', compact('cbuku'));
        

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
        Rak::insert($data);
        return redirect('/addRak');   
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
        $data=Rak::findOrFail($id);
        return view('/showRak', compact('data','cbuku'));
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
        $dataEdit=Rak::findOrFail($id);
        $data=$request->except(['_token']);
        $dataEdit->update($data);
        return redirect('/addRak');

       // return view('/addRak',compact('dataEdit','data','cbuku'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataEdit=Rak::findOrFail($id);
        $dataEdit->delete();
        return redirect('/addRak');
    }
}
