<?php

namespace App\Http\Controllers;
use App\Models\m_bukuAdmin;
use App\Models\m_ketersediaanAdmin;
use App\Models\m_katAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('table_buku_admin')
        ->join('table_kategori', 'table_buku_admin.kategori', '=', 'table_kategori.kategori')
        ->join('table_ketersediaan_admin', 'table_buku_admin.ketersediaan', '=', 'table_ketersediaan_admin.ketersediaan')
        ->select('table_buku_admin.id_buku','table_buku_admin.penerbit','table_buku_admin.judul_buku', 'table_buku_admin.isbn', 
        'table_kategori.deskripsi as kategori','table_ketersediaan_admin.deskripsi as ketersediaan', 'table_buku_admin.cover_img')->get();
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = m_katAdmin::all();
        $ketersediaan = m_ketersediaanAdmin::all();

        return view('admin.buku.create', compact('kategori', 'ketersediaan'));
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
            
            $file = $request->file('cover_img');
            
            $buku = new m_bukuAdmin;
            $kategori = new m_katAdmin;
            $ketersediaan = new m_ketersediaanAdmin;
            
            $buku->penerbit = $request->penerbit;
            $buku->judul_buku = $request->judul_buku;
            $buku->isbn  = $request->isbn;
            $buku->kategori   = $request->kategori;
            $buku->ketersediaan   = $request->ketersediaan;
            $buku->cover_img  = $file->getClientOriginalName();
            $tujuan_upload = 'image';
            
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $buku->save();
            
            return redirect('bukuAdmin')->with('msg','Data Berhasil di Simpan');
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
        // $kategori = m_katAdmin::all();
        // $ketersediaan = m_ketersediaanAdmin::all();
        // $kategori = m_katAdmin::find($id);
        // $ketersediaan = m_ketersediaanAdmin::find($id);
        
        // $buku = m_bukuAdmin::with('kategori')->where('kategori', $id)->first();
        return view('admin.buku.detail', compact('show'));
        
        // $buku = m_bukuAdmin::find($id);
        // $kategori = m_katAdmin::find($id);
        // $ketersediaan = m_ketersediaanAdmin::find($id);
        // $buku = m_bukuAdmin::with('kategori', 'ketersediaan')->where('kategori','ketersediaan', $id)->first();
        // return view('admin.buku.detail', compact('buku', 'kategori', 'ketersediaan'));
        // return view('admin.buku.detail', ['Kategori' => $buku]);
        // return view('admin.buku.detail', compact('buku'));
        // $show = m_aboutAdmin::find($id);
        // return view('admin.about.detail', compact('show'));
        
        // $buku = Buku::with('kategori')->where('kategori', $id)->first();
        // return view('admin.buku.detail', ['m_katAdmin' => $show], ['m_ketersediaanAdmin' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $edit = m_bukuAdmin::find($id);
        // return view('admin.buku.edit', compact('edit'));
        
        $buku = m_bukuAdmin::with('kategori')->where('id_buku', $id)->first();
        $kategori = m_katAdmin::all();
        $ketersediaan = m_ketersediaanAdmin::all();
        
        return view('admin.buku.edit', compact('buku','kategori', 'ketersediaan'));
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
        
            // $this->validate($request, [
                
            
            // ]);
            $request->validated();
            $buku = m_bukuAdmin::where('id_buku', $id)->first();
            if($request->hasFile('image')){
                $path = 'image'.$lawyer->picture;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('images');
                $ext = $file->getClientOriginalExtension();
                $cover_img = time().'.'.$ext;
                $file->move('image', $cover_img);
                $buku->picture = $cover_img;
            }

            // $buku = m_bukuAdmin::with('kategori')->where('id_buku', $id)->first();
            // $file = $request->file('cover_img');
            
            // $buku = new m_bukuAdmin;
            // $kategori = new m_katAdmin;
            // $ketersediaan = new m_ketersediaanAdmin;
            
            $buku->penerbit = $request->penerbit;
            $buku->judul_buku = $request->judul_buku;
            $buku->isbn  = $request->isbn;
            $buku->kategori   = $request->kategori;
            $buku->ketersediaan   = $request->ketersediaan;
            // $buku->cover_img  = $file->getClientOriginalName();
            // $tujuan_upload = 'image';
            
            $buku->save();

            m_bukuAdmin::find($id)->update($request->all());
            
            return redirect('bukuAdmin')->with('msg','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_bukuAdmin::find($id)->delete();
        return redirect('bukuAdmin')->with('msg', 'Data Berhasil dihapus');
    }
}
