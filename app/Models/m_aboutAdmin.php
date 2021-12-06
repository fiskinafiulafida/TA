<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_aboutAdmin extends Model
{
    protected $table = 'table_about_admin';
    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
        'deskripsi',
    ];

    use HasFactory;
}
