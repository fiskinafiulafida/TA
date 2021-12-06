<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_memberAdmin extends Model
{
    protected $table = 'table_member_admin';
    protected $primaryKey = 'id_anggota';

    protected $fillable = [
                            'nama_anggota',
                            'email',
                            'username',
                            'password'
                        ];
    use HasFactory;
}
