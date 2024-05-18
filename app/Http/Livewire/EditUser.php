<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{

    public $name;
    public $email;
    public $roles;
    public $saldoOption = 'no';
    public $saldoAmount;

    public function save()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'roles' => 'required',
        ];


        if ($this->roles === 'recarga' && $this->saldoOption === 'yes') {
            $rules['saldoAmount'] = 'required';
        }

        $this->validate($rules);

       
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        if (!empty($this->roles)) {
            $user->assignRole($this->roles);
        }

        if ($this->roles === 'recarga' && $this->saldoOption === 'yes') {

            if ($this->saldoAmount > 0) {

                $user->deposit($this->saldoAmount);
            }
        }

       
        return redirect()->route('admin.users.index');
    }


   
    public function refreshuser()
    {
        $this->user = $this->user->fresh();
    }

    public function delete(){
       
        $this->user->delete();
        return redirect()->route('admin.index');
    }

    public function render()
    {
        return view('livewire.edit-user')->layout('layouts.admin');
    }
}
