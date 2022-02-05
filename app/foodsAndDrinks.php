<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class foodsAndDrinks extends Model
{
    protected $fillable=['name','price','count','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
