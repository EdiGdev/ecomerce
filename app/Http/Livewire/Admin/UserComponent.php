<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserComponent extends Component
{
    use WithPagination;

    public $search;
    public $selectedRole = 'recarga'; // Variable para almacenar el rol seleccionado


    public $openModal = false;
    public $openModalx2 = false;
    public $userId;
    public $cantidad;

    public function openModal($userId)
    {
        $this->userId = $userId;
        $this->openModal = true;
    }

    public function openModalx2($userId)
    {
        $this->userId = $userId;
        $this->openModalx2 = true;
    }

    public function aumentar_saldo()
    {
        $this->validate([
            'cantidad' => ['required', 'numeric', 'min:1'],
        ]);

        $user = User::find($this->userId);
        $user->deposit($this->cantidad);
        $this->openModal = false;
        $this->cantidad = null;
    }

    public function disminuir_saldo()
    {
        $this->validate([
            'cantidad' => ['required', 'numeric', 'min:1', function ($attribute, $value, $fail) {
                $user = User::find($this->userId);

                if ($value > $user->balance) {
                    $fail("La cantidad a retirar no puede ser mayor que el saldo disponible.");
                }
            }],
        ]);

        $user = User::find($this->userId);
        $user->withdraw($this->cantidad);
        $this->openModalx2 = false;
        $this->cantidad = null;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function assignRole($userId, $value)
    {
        $user = User::find($userId);
        $role = Role::findByName($value);

        if ($user && $role) {
            $user->syncRoles([$role]);
        }
    }

    public function render()
    {
        $roles = [
            'all' => 'Todos',
            'admin' => 'Administrador',
            'recarga' => 'Punto de recarga',
            'cliente' => 'Cliente M & G'
        ]; // Roles disponibles

        $users = User::where('email', '<>', auth()->user()->email)
            ->where(function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('unique_code', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $this->search . '%');
            });

        // Filtrar según el rol seleccionado
        if ($this->selectedRole !== 'all') {
            $users->whereHas('roles', function ($q) {
                $q->where('name', $this->selectedRole);
            });
        }

        $users = $users->orderBy('id', 'desc')->paginate();

        return view('livewire.admin.user-component', [
            'users' => $users,
            'roles' => $roles,
        ])->layout('layouts.admin');
    }
}
