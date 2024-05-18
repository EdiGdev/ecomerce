<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tienda;
use Livewire\Component;

class MercayGanaComponent extends Component
{
    public $tiendas, $tienda;
    public $createForm = [
        'numero_telefono' => null,
        'direccion_tienda' => null,
        'numero_cuenta' => null,
        'nombre_titular' => null,
        'banco' => null,
        'tipo_cuenta' => null,
        'correodePagos' => null,
    ];
    public $editForm = [
        'open' => false,
        'numero_telefono' => null,
        'direccion_tienda' => null,
        'numero_cuenta' => null,
        'nombre_titular' => null,
        'banco' => null,
        'tipo_cuenta' => null,
        'correodePagos' => null,
    ];
    public $showAddModal = false;
    public $showEditModal = false;
    public $rules = [
        'createForm.numero_telefono' => 'required',
        'createForm.direccion_tienda' => 'required',
        'createForm.numero_cuenta' => 'required',
        'createForm.nombre_titular' => 'required',
        'createForm.banco' => 'required',
        'createForm.tipo_cuenta' => 'required',
    ];

    protected $listeners = ['delete'];

    public function mount()
    {
        $this->getTiendas();
    }

    public function getTiendas()
    {
        $this->tiendas = Tienda::first();

    }

    public function save()
    {
        $this->validate();
        Tienda::create($this->createForm);
        $this->reset('createForm');
        $this->getTiendas();
        $this->showAddModal = false;
    }

    public function edit(Tienda $tienda)
    {
        $this->tienda = $tienda;
        $this->editForm['open'] = true;
        $this->editForm['indicativo_telefono'] = $tienda->indicativo_telefono;
        $this->editForm['numero_telefono'] = $tienda->numero_telefono;
        $this->editForm['direccion_tienda'] = $tienda->direccion_tienda;
        $this->editForm['numero_cuenta'] = $tienda->numero_cuenta;
        $this->editForm['nombre_titular'] = $tienda->nombre_titular;
        $this->editForm['banco'] = $tienda->banco;
        $this->editForm['tipo_cuenta'] = $tienda->tipo_cuenta;
        $this->editForm['correodePagos'] = $tienda->correodePagos;
        $this->showEditModal = true;
    }

    public function update()
    {
        $this->validate([
            'editForm.numero_telefono' => 'required',
            'editForm.direccion_tienda' => 'required',
            'editForm.numero_cuenta' => 'required',
            'editForm.nombre_titular' => 'required',
            'editForm.banco' => 'required',
        ]);

        $this->tienda->update($this->editForm);
        $this->reset('editForm');
        $this->getTiendas();
        $this->showEditModal = false;
    }

    public function delete($tiendaId)
    {
        Tienda::find($tiendaId)->delete();
        $this->getTiendas();
    }

    public function render() 
    {
        return view('livewire.admin.mercay-gana-component')->layout('layouts.admin');
    }
}
