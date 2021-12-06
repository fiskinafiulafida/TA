<?php

namespace App\Http\Controllers;
use App\Models\m_ketersediaanAdmin;
use Illuminate\Http\Request;

class KetersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = m_ketersediaanAdmin::all();
        return view('admin.ketersediaan.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ketersediaan.create');
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
            // 'ketersediaan' => 'required',
            'deskripsi' => 'required',
        ]);
        m_ketersediaanAdmin::create($request->all());

        return redirect()->route('ketersediaanAdmin.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ketersediaan)
    {
        $show = m_ketersediaanAdmin::find($ketersediaan);
        return view('admin.ketersediaan.detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ketersediaan)
    {
        $edit = m_ketersediaanAdmin::find($ketersediaan);
        return view('admin.ketersediaan.edit', compact('edit'));
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
            'deskripsi' => '',
        ]);
        m_ketersediaanAdmin::find($id)->update($request->all());
        return redirect()->route('ketersediaanAdmin.index')->with('succes','Ketersediaan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            m_ketersediaanAdmin::find($id)->delete();
            return redirect()->route('ketersediaanAdmin.index')-> with('success', 'Ketersediaan Berhasil Dihapus');
        }
    }
}
