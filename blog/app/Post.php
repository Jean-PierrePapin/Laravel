<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // read https://laravel.com/docs/7.x/eloquent

    use SoftDeletes;
    
    protected $dates = ['deleted_at'];


    // In case the table name is different from the command line
    // protected $table = 'posts';

    protected $fillable = [
        'title',
        'content'
    ];

    


}
