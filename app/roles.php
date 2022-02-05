<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
   protected $fillable=['name'];

   public function user(){
       return $this->hasMany(User::class);
   }
}
