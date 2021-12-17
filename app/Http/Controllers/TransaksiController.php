<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\m_bukuAdmin;
use App\Models\m_katAdmin;
use App\Models\m_login;
use App\Models\User;
use App\Models\m_transaksi;
use App\Models\m_status;
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
        $index = m_transaksi::all();
        return view('member.transaksi.berhasil', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $buku = m_bukuAdmin::all();
        $status = m_status::all();
        return view('member.transaksi.index', compact('user','buku','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'isbn'  => 'required',
            
            ]);
            
            $transaksi = new m_transaksi;
            $buku = new m_bukuAdmin;
            $user = new User;
            $status = new m_status;
            
            $transaksi->id_buku = $request->id_buku;
            $transaksi->id_status = $request->id_status;
            $transaksi->penerbit = $request->penerbit;
            $transaksi->judul_buku = $request->judul_buku;
            $transaksi->isbn  = $request->isbn;
            $transaksi->id   = $request->id;
            $transaksi->tgl_pinjam   = $request->tgl_pinjam;
            $transaksi->tgl_kembali   = $request->tgl_kembali;
            
            $transaksi->save();
            
            return redirect()->route('transaksi.index')->with('msg','Data Berhasil di Simpan');     
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
        $edit = Transaksi::find($id);
        return view('member.transaksi.berhasil', compact('edit'));
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
