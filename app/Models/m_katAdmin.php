<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cviebrock\EloquentSluggable\Sluggable;

class m_katAdmin extends Model
{
    protected $table = 'table_kategori';
    protected $primaryKey = 'kategori';

    protected $fillable = ['deskripsi'];
    
    public function buku(){
        return $this->hasMany(m_bukuAdmin::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'deskripsi'
            ]
        ];
    }

    use HasFactory;
}
