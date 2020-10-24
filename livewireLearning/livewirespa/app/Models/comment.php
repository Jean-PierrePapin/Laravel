<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded = [];

    public function creator() 
    {
        return $this->belongsTo( User::class, 'user_id' );
    }

}
