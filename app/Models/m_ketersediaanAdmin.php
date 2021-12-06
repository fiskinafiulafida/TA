<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_ketersediaanAdmin extends Model
{
    protected $table = 'table_ketersediaan_admin';
    protected $primaryKey = 'ketersediaan';

    protected $fillable = [
        'deskripsi',
    ];

    public function buku(){
        return $this->hasMany(m_bukuAdmin::class);
    }
    use HasFactory;
}
