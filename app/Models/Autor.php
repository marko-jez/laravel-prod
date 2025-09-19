<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autori';

    protected $fillable = ['ime', 'prezime'];

    public function knjige() {
        return $this->hasMany(Knjiga::class, 'autorID');
    }
}
