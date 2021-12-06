<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_kontakAdmin extends Model
{
    protected $table = 'table_kontak_admin';
    protected $primaryKey = 'id';

    protected $fillable = [
                            'nama',
                            'alamat',
                            'noTlp',
                            'link'
                        ];
    use HasFactory;
}
