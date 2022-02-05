<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\foodsAndDrinks;

class Foods extends Component
{

    public $name='';
    public $price='';

    public function insert(){

        $this->validate([
            'name'=>'required|string',
            'price'=>'numeric|required',
        ]);

        foodsAndDrinks::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'count'=>0,
            'user_id'=>Auth::user()->id,
        ]);

         $this->name='';
         $this->price='';
    }

    public function delete($id){
        foodsAndDrinks::find($id)->delete();
    }

    public function render()
    {
        $food=foodsAndDrinks::all();
        return view('livewire.foods',compact('food'));
    }
}
