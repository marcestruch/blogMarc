<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contingut', 'usuari_id'];

    public function usuari()
    {
        return $this->belongsTo(User::class, 'usuari_id');
    }
}
