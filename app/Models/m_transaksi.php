<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_transaksi extends Model
{
    protected $table = 'table_transaksi';
    protected $fillable = ['id_anggota', 'id_buku', 'tgl_pinjam'];
    use HasFactory;
}
