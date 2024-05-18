<?php

namespace App\Http\Livewire;

use App\Mail\UserCredentialsEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateUser extends Component
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

        $password = Str::random(10);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($password),
        ]);

        if (!empty($this->roles)) {
            $user->assignRole($this->roles);
        }

        if ($this->roles === 'recarga' && $this->saldoOption === 'yes') {

            if ($this->saldoAmount > 0) {

                $user->deposit($this->saldoAmount);
            }
        }

        Mail::to($this->email)->send(new UserCredentialsEmail($this->email, $password, $user->unique_code, $this->roles));

        session()->flash('success', 'Usuario creado con éxito');

        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        return view('livewire.create-user')->layout('layouts.admin');
    }
}
