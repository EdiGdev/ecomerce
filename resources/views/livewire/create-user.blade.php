<div>
    <div class="container-menu py-12">

        <x-jet-form-section submit="save" class="mb-6">
            <x-slot name="title">
                Agregar nuevo usuario
            </x-slot>
            <x-slot name="description">
                En esta sección podrás agregar un nuevo usuario
            </x-slot>
            <x-slot name="form">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="name" class="w-full" />
                    <x-jet-input-error for="name" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Email
                    </x-jet-label>
                    <x-jet-input type="email" wire:model="email" class="w-full" />
                    <x-jet-input-error for="email" />
                </div>

               
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label value="roles" />
                        <select class="w-full form-control mt-3" wire:model="roles">
                            <option value="">Seleccione un rol para este usuario</option>
                            <option value="recarga">Punto de recarga</option>
                            <option value="admin">Administrador M & G</option>
                        </select>
                        <x-jet-input-error for="roles" />
                    </div>

                    @if ($roles === 'recarga')
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label>
                                ¿Quieres asignarle saldo al administrador del punto de recarga?
                            </x-jet-label>
                            <div>
                                <input type="radio" wire:model="saldoOption" value="yes"> Sí
                                <input type="radio" wire:model="saldoOption" value="no"> No
                            </div>
                        </div>

                        @if ($saldoOption === 'yes')
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label>
                                    Ingrese la cantidad de saldo a asignar:
                                </x-jet-label>
                                <x-jet-input type="number" wire:model="saldoAmount" class="w-full" />
                                <x-jet-input-error for="saldoAmount" />
                            </div>
                        @endif
                    @endif

            </x-slot>

            <x-slot name="actions">
                <x-jet-button>
                    Agregar
                </x-jet-button>
            </x-slot>
        </x-jet-form-section>

    </div>

</div>
