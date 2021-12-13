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
        $category = m_katAdmin::all();
        $buku = m_bukuAdmin::all();

        return view('member.home.index', [
            'category' => $category,
            'buku' => $buku
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
    public function show($id)
    {
        $show = m_bukuAdmin::find($id);
        return view('member.home.detail', compact('show'));
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

    public function buku_kategori($kategori){
        $data = DB::table('table_buku_admin')
        ->join('table_kategori', 'table_buku_admin.kategori', '=', 'table_kategori.kategori')->where('kategori', $kategori)
        ->join('table_ketersediaan_admin', 'table_buku_admin.ketersediaan', '=', 'table_ketersediaan_admin.ketersediaan')
        ->select('table_buku_admin.id_buku','table_buku_admin.penerbit','table_buku_admin.judul_buku', 'table_buku_admin.isbn', 
        'table_kategori.deskripsi as kategori','table_ketersediaan_admin.deskripsi as ketersediaan', 'table_buku_admin.cover_img')->get();

        // $data = \DB::table('table_buku_admin')->where('kategori', $kategori_id)->get();
        return view('member.home.kategori', compact('data'));
    }

    public function showPostByCategory($slug){
        $posts = m_bukuAdmin::publish()->whereHas('categories', function($query) use ($slug){
            return $query->where('slug', $slug);
        });
        $category = m_katAdmin::where('slug', $slug)->first();

        return view ('home.member.kategori', [
            'posts' => $posts,
            'category' => $category
        ]);
    }
}
