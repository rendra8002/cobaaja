<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // table


    //fillable
    protected $guarded = [];

    //relasi
    public function clas()
    {
        return $this->belongsTo(Clas::class, 'clas_id');
    }
}
