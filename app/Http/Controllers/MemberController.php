<?php

namespace App\Http\Controllers;
use App\Models\m_memberAdmin;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = m_memberAdmin::all();
        return view('admin.member.index', compact('index'));
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
        $request->validate([

            'nama_anggota' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        m_memberAdmin::create($request->all());

        return redirect()->route('memberAdmin.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = m_memberAdmin::find($id);
        return view('admin.member.detail', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = m_memberAdmin::find($id);
        return view('admin.member.edit', compact('edit'));
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
            'nama_anggota' => '',
            'email' => '',
            'username' => '',
            'password' => '',
        ]);
        m_memberAdmin::find($id)->update($request->all());
        return redirect()->route('memberAdmin.index')->with('succes','Member Berhasil di Update');
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
            m_memberAdmin::find($id)->delete();
            return redirect()->route('memberAdmin.index')-> with('success', 'Member Berhasil Dihapus');
        }
    }
}
