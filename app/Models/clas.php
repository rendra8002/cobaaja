<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clas extends Model
{
        // table
protected $table = 'clas';

    //fillable
    protected $guarded = [];

    //relasi
    public function users()
    {
        return $this->hasMany(User::class, 'clas_id');
    }
}
