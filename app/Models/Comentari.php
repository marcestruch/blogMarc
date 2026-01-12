<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentari extends Model
{
    use HasFactory;

    public function usuari()
    {
        return $this->belongsTo(Usuari::class, 'usuari_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
