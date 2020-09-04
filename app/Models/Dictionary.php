<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $guarded = [];

    public function Terms()
    {
        return $this->hasMany (Term::class);
    }


}
