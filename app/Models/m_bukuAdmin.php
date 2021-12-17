<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_bukuAdmin extends Model
{
    protected $table = 'table_buku_admin';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['penerbit','judul_buku','isbn','kategori','ketersediaan','tahu_terbit','deskripsi','cover_img',];

    public function kategori(){
        return $this->belongsTo(m_katAdmin::class);
    }
    public function ketersediaan(){
        return $this->belongsTo(m_ketersediaanAdmin::class);
    }

    public function buku(){
        return $this->hasMany(m_bukuAdmin::class);
    }

    public function categories(){
        return $this->belongsToMany(m_katAdmin::class)->withTimestamps();
    }
    public function transaksi(){
        return $this->hasMany(m_transaksi::class);
    }
    use HasFactory;
}
