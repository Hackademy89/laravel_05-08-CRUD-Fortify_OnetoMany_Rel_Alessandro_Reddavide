<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 
        'year',
        'director_id',
        'genere', 
        'description', 
        'img',
    ];

    public function user(){
        return $this->belongsTo(User::class); /*appartiene a un utente*/
    }

    public function director(){
        return $this->belongsTo(Director::class);
    }

    public function platforms(){
        return $this->belongsToMany(Platform::class);
    }


}
