<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodis extends Model
{
    protected $table = 'prodis';

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
