<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Anggota2;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ang=DB::table('table_anggota')->count();
        $buku=DB::table('buku')->count();
        $pinjam=DB::table('peminjaman')->count();
        $user=DB::table('users')->count();
        return view('/index',compact('ang','buku','pinjam','user'));
       
    }
}
