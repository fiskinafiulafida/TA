<?php

namespace App\Http\Controllers;
use App\Models\m_bukuAdmin;
use App\Models\m_katAdmin;
use Illuminate\Http\Request;

class HomeMemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $kategori = m_katAdmin::all();
        // $buku = m_bukuAdmin::all();

        return view('member.home.index', [
            'kategori' => $kategori,
            // 'buku' => $buku
        ]);
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
    public function detailBuku($id)
    {
        $member = m_bukuAdmin::where('id_buku', '=', $id)->first();
        return view('member.home.detail', compact('member'));
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

    public function showPostByCategory($kategori){
        $buku = m_bukuAdmin::join('table_kategori', 'table_kategori.kategori', '=' , 'table_buku_admin.kategori')->where('table_buku_admin.kategori', '=', $kategori)->get();
        return view('member.home.kategori', compact('buku'));
    }
}
