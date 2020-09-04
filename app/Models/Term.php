<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $guarded = [];

    public function Translations ()
    {
        return $this->hasMany ( Translation::class );
    }
}
