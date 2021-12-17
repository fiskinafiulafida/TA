<?php

namespace App\Http\Controllers;
use App\Models\m_transaksi;
use App\Models\m_status;
use App\Models\m_bukuAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $index = m_transaksi::all();
        
        $buku = DB::table('table_transaksi_member')
        ->join('table_status', 'table_transaksi_member.id_status', '=', 'table_status.id_status')
        ->join('users', 'table_transaksi_member.id', '=', 'users.id')
        ->join('table_buku_admin', 'table_transaksi_member.id_buku', '=', 'table_buku_admin.id_buku')
        ->select('table_transaksi_member.id_transaksi','table_transaksi_member.id','table_transaksi_member.id_buku', 'table_transaksi_member.judul_buku', 
        'table_transaksi_member.isbn','table_transaksi_member.penerbit', 'table_transaksi_member.tgl_pinjam', 'table_transaksi_member.tgl_kembali')->get();
        return view('admin.peminjaman.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = m_transaksi::find($id);
        return view('admin.peminjaman.detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = m_transaksi::join( 'table_status', 'table_transaksi_member.id_status', '=' , 'table_status.id_status')->where('id_transaksi', $id)->first();
        return view('admin.peminjaman.edit', compact('transaksi'));
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
        $this->validate($request, [
            ]);
            
            $transaksi = new m_transaksi;
            $buku = new m_bukuAdmin;
            $user = new User;
            $status = new m_status;
            
            $transaksi->id_status = $request->id_status;
            
            $transaksi->save();
            
            return redirect()->route('peminjamanAdmin.index')->with('msg','Data Berhasil di Simpan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_transaksi::find($id)->delete();
        return redirect()->route('peminjamanAdmin.index')-> with('success', 'Peminjaman Berhasil Dihapus');
    }

    public function changeMemberStatus(Request $request)
    {
        $members = m_transaksi::find($request->id_status);
        $members->status = $request->status;
        $members->save();
    }
}
