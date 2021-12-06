<?php

namespace App\Http\Controllers;
use App\Models\m_katadmin;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = m_katadmin::all();
        return view('admin.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = m_katadmin::all();
        return view('admin.create', compact('kategori'));
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
            'deskripsi' => 'required',
        ]);
        m_katadmin::create($request->all());

        return redirect()->route('kategori.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kategori)
    {
        $kategori = m_katadmin::find($kategori);
        return view('admin.detail', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $kategori)
    {

        $kategori = m_katadmin::find($kategori);
        return view('admin.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$kategori)
    {
        $request->validate([
            'deskripsi' => 'required',
        ]);
        m_katadmin::find($kategori)->update($request->all());
        return redirect()->route('kategori.index')->with('succes','Siswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(m_katadmin $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('succes','Siswa Berhasil di Hapus');
    }

    
}
