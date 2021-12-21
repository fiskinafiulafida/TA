<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_status extends Model
{

    protected $table = 'table_status';
    protected $primaryKey = 'id_status';

    protected $fillable = [
        'id_status',
        'deskripsi',
    ];
    public function transaksi(){
        return $this->hasMany(m_transaksi::class, 'id_status');
    }

    use HasFactory;
}
