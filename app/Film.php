<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $fillable = [
        'header', 'subheader', 'content', 'picture', 'url', 'category'
    ]; 
 
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_film');
    }
}
