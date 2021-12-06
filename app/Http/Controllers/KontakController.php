<?php

namespace App\Http\Controllers;
use App\Models\m_kontakAdmin;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = m_kontakAdmin::all();
        return view('admin.kontak.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontak.create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'noTlp' => 'required',
            'link' => 'required',
        ]);
        m_kontakAdmin::create($request->all());

        return redirect()->route('kontakAdmin.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = m_kontakAdmin::find($id);
        return view('admin.kontak.detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = m_kontakAdmin::find($id);
        return view('admin.kontak.edit', compact('edit'));
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
           $request->validate([
               'nama' => '',
               'alamat' => '',
               'noTlp' => '',
               'link' => '',
           ]);

           m_kontakAdmin::find($id)->update($request->all());
           return redirect()->route('kontakAdmin.index')->with('success', 'Kontak Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_kontakAdmin::find($id)->delete();
            return redirect()->route('kontakAdmin.index')-> with('success', 'About Berhasil Dihapus');
    }
}
