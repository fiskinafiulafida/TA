<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\m_bukuAdmin;
use App\Models\m_katAdmin;
use App\Models\m_login;
use App\Models\Transaksi;
use App\Models\users;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DB::table('table_transaksi')
        ->join('table_buku_admin', 'table_buku_admin.id_buku', '=', 'table_transaksi.id_buku')
        ->join('table_kategori', 'table_kategori.kategori', '=', 'table_buku_admin.kategori')
        ->join('users', 'table_transaksi.id', '=', 'users.id')
        ->select('table_transaksi.id','users.name','table_buku_admin.id_buku',
        'table_buku_admin.judul_buku', 
        'table_buku_admin.isbn', 'table_kategori.deskripsi as kategori',
        'table_transaksi.tgl_pinjam','table_transaksi.tgl_kembali')
        ->get();
        return view('member.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trans = Transaksi::all();
        
        return view('member.transaksi.index', compact('trans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required',
            'id' => 'required',
            'name' => 'required',
            'id_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);
        $user = new users;
        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = m_bukuAdmin::find($id);
        return view('member.transaksi.index', compact('show'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
