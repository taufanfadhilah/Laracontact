<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Contact extends Model
{
    protected $fillable = ['name', 'phone', 'address', 'avatar'];

    public function Favorite()
    {
        return $this->hasMany('App\Favorite');
    }

    public function MyFavorite()
    {
        return $this->hasMany('App\Favorite')->where('user_id', Auth::id());
    }
}
