<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    protected $table = 'knjige';

    protected $fillable = ['naziv', 'godine', 'autorID', 'zanrID'];

    public function autor() {
        return $this->belongsTo(Autor::class, 'autorID');
    }

}
