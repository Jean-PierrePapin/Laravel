<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // read https://laravel.com/docs/7.x/eloquent


    public $directory = "/images/";

    use SoftDeletes;
    
    protected $dates = ['deleted_at'];


    // In case the table name is different from the command line
    // protected $table = 'posts';

    protected $fillable = [ 'title', 'content', 'path' ];

    public function user() {

        return $this->belongsTo('App\User');

    }

    public function photos() {

        return $this->morphMany('App\Photo', 'imageable');

    }

    public function tags() {

        return $this->morphToMany('App\Tag', 'taggable');

    }

    public static function socpeLatest($query){

        return $query->orderBy('id', 'asc')->get();

    }

    
    public function getPathAttribute($value) {

        return $this->directory . $value;

    }



}
