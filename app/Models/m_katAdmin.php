<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class m_katadmin extends Model
{
    protected $table = 'table_kategori';
    protected $primaryKey = 'kategori';

    protected $fillable = ['deskripsi'];
    
    public function buku(){
        return $this->hasMany(m_bukuAdmin::class);
    }
    use HasFactory;
}
