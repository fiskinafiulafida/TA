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
            $buku->tahu_terbit   = $request->tahu_terbit;
            $buku->deskripsi   = $request->deskripsi;
            $buku->ketersediaan   = $request->ketersediaan;
            $buku->cover_img  = $file->getClientOriginalName();
            $tujuan_upload = 'image';
            
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $buku->save();
            
            return redirect()->route('bukuAdmin.index')->with('msg','Data Berhasil di Simpan');
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

        return view('admin.buku.detail', compact('show'));
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
        $request->validate([
            'judul_buku' => 'required',
            'isbn'  => 'required',
            
            ]);
            $buku = m_bukuAdmin::with('kategori')->where('id_buku', $id)->first();
            $file = $request->file('cover_img');
            
            $buku = new m_bukuAdmin;
            $kategori = new m_kategori;
            $ketersediaan = new m_ketersediaan;
            
            $buku->penerbit = $request->penerbit;
            $buku->judul_buku = $request->judul_buku;
            $buku->isbn  = $request->isbn;
            $buku->kategori   = $request->kategori;
            $buku->tahun_terbit   = $request->tahun_terbit;
            $buku->deskripsi   = $request->deskripsi;
            $buku->ketersediaan   = $request->ketersediaan;
            $buku->cover_img  = $file->getClientOriginalName();
            $tujuan_upload = 'image';
            
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $buku->save();

            Buku::find($id)->update($request->all());
            
            // return redirect('buku')->with('msg','Data Berhasil diupdate');
            
            return redirect()->route('bukuAdmin.index')->with('msg','Data Berhasil diupdate');
        
        // $buku = m_bukuAdmin::find($id);

        // $buku->title = $request->title;
        // $buku->content = $request->content;

        // if($buku->cover_img && file_exists(storage_path('app/public/' .$buku->cover_img))){
        //     \Storage::delete('public/' . $buku->cover_img);
        // }

        // $image_name = $request->file('image')->store('image','public');
        // $buku->cover_img = $image_name;

        // $buku->save();
        // return redirect('bukuAdmin.index')->with('msg','Data Berhasil diupdate');

            // $rules = [
            //     'penerbit' => 'required',
            //     'judul_buku' => 'required',
            //     'isbn' => 'required',
            //     'kategori' => 'required',
            //     'cover_img' => 'required',
            //     'ketersediaan' => 'required'
            // ];
            
            // $validatedData = $request->validate($rules);

            // m_bukuAdmin::where('id_buku', $buku->id)->update($validatedData);
            
            // return redirect('bukuAdmin.index')->with('msg','Data Berhasil diupdate');
            // $request->validate([
            //     'penerbit' => 'required',
            //     'judul_buku' => 'required',
            //     'isbn' => 'required',
            //     'kategori' => 'required',
            //     'ketersediaan' => 'required',
            //     'cover_img' => 'image|mimes:jpeg,png,jpg|max:2048'
            // ]);
            // $employee = m_bukuAdmin::where('id_buku', Auth::user()->id)->first();

            // if ($request->hasfile('cover_img')){
            //     $file = $request->file('cover_img');
            //     $extension = $file->getClientOriginalExtension();
            //     $filename = md5(time()).'.'.$extension;
            //     $file->move(public_path().'\image',$filename);
            //     $employee->cover_img=$filename;
            // } else {
            //     return $request;
            //     $employee->cover_img='';
            // }

            // if($employee->save()){
            //     return redirect()->route('bukuAdmin.index')->withSuccess('S-a incarcat cu success!');
            // }else{
            //     return redirect()->route('bukuAdmin.edit')->withDanger('Nu s-a incarcat! A aparut o eroare.');
            // }
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
