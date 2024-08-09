<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model

{
    use HasFactory;

    protected $fillable = [
        'judul','slug','foto','deskripsi','url_vidio','id_kategori'
    ];
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'id_kategori');
    }

    public function genre()
    {
        return $this->belongsTomany(Genre::class, 'genre_film', 'id_film', 'id_genre');
    }

    public function aktor()
    {
        return $this->belongsTomany(Aktor::class, 'genre_film', 'id_film', 'id_aktor');
    }

}
