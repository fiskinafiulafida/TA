<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_transaksi extends Model
{

    protected $table = 'table_transaksi_member';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id',
        'id_buku',
        'id_status',
        'judul_buku',
        'penerbit',
        'isbn',
        'tgl_pinjam',
        'tgl_kembali',
    ];

    public function buku(){
        return $this->belongsTo(m_bukuAdmin::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(m_status::class);
    }

    use HasFactory;
}
