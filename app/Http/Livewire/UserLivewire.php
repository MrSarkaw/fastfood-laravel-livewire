<?php

namespace App\Http\Livewire;
use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserLivewire extends Component
{
    
public $name='';
public $email='';
public $password='';
public $role_id='';

    public function insert(){
        $this->validate([
            'name'=>"required|string",
            'email'=>'email|required|string',
            'password'=>'required|min:6',
            'role_id'=>'required'
        ]);
        
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>hash::make($this->password),
            'role_id'=>$this->role_id,
        ]);

        $this->name='';
        $this->email='';
        $this->password='';
        $this->role_id='';

    }


    public function delete($id){
        User::find($id)->delete();
    }

    public function update($id,$name)
    {   
        User::find($id)->update([
            'name'=>$name
        ]);
    }

    public function render()
    {
        $users=User::all();
        return view('livewire.user-livewire',compact('users'));
    }
}
