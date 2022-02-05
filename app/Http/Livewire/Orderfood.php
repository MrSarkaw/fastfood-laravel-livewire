<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use App\foodsAndDrinks;

class Orderfood extends Component
{

    public $number='';
    public $numberDec='';
    public function insert($id)
    {
        foodsAndDrinks::find($id)->update(['count'=>$this->number]);
        $this->number='';
    }

    public function delete($id)
    {
        $foodCount=foodsAndDrinks::find($id)->count;
        $newVal=$foodCount-$this->numberDec;    
        if($this->numberDec>$foodCount){
            foodsAndDrinks::find($id)->update(['count'=>0]);
        }else{
            foodsAndDrinks::find($id)->update(['count'=>$newVal]);
        }
        $this->numberDec='';
    }

    
    public function render()
    {
        $orderfood=foodsAndDrinks::where('count','>',0)->get();
        $arrImg=[1,2,3,4,5,6,7];
        $foods=foodsAndDrinks::all();
        return view('livewire.orderfood',compact('foods','arrImg','orderfood'));
    }
}
