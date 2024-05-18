<div class="container-menu py-12">
    {{-- Lista de tiendas --}}

    <x-jet-action-section>
        <x-slot name="title">
            Perfil M & G
        </x-slot>
        <x-slot name="description">
            Aquí encontrará datos...
        </x-slot>
        <x-slot name="content">

            @if ($tiendas)
                <div class="mb-6 flex justify-end space-x-4">
                    <x-jet-button wire:click="edit('{{ $tiendas->id }}')">
                        Editar
                    </x-jet-button>

                    <x-jet-danger-button wire:click="$emit('deleteTienda', '{{ $tiendas->id }}')">
                        Eliminar
                    </x-jet-danger-button>

                </div>
                <ul class="max-w-full divide-y divide-gray-200 dark:divide-gray-700">

                    <li class="pb-3 sm:pb-4">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-900 truncate dark:text-white">
                                    <span class="font-semibold">Número Teléfono:</span>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $tiendas->numero_telefono }}
                            </div>
                        </div>
                    </li>

                    <li class="pb-3 sm:pb-4">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-900 truncate dark:text-white">
                                    <span class="font-semibold">Dirección Tienda:</span>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $tiendas->direccion_tienda }}
                            </div>
                        </div>
                    </li>

                    <li class="pb-3 sm:pb-4">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-900 truncate dark:text-white">
                                    <span class="font-semibold">Número Cuenta:</span>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $tiendas->numero_cuenta }}
                            </div>
                        </div>
                    </li>

                    <li class="pb-3 sm:pb-4">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-900 truncate dark:text-white">
                                    <span class="font-semibold">Nombre Titular:</span>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $tiendas->nombre_titular }}
                            </div>
                        </div>
                    </li>

                    <li class="pb-3 sm:pb-4">
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-900 truncate dark:text-white">
                                    <span class="font-semibold">Banco:</span>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $tiendas->banco }}
                            </div>
                        </div>
                    </li>
                </ul>
            @else
                <div class="flex justify-center">
                    <p>No hay datos disponibles.</p>
                </div>
            @endif
        </x-slot>

    </x-jet-action-section>

    {{-- Modal de editar Tienda --}}
    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar Tienda
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Número Teléfono
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.numero_telefono" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.numero_telefono" />
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Dirección Tienda
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.direccion_tienda" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.direccion_tienda" />
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Número Cuenta
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.numero_cuenta" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.numero_cuenta" />
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Nombre del Titular
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.nombre_titular" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.nombre_titular" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Tipo de Cuenta
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.tipo_cuenta" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.tipo_cuenta" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Banco
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.banco" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.banco" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Correo para recibir pagos  
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.correodePagos" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.correodePagos" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('editForm')" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    @if (!$tiendas)
        {{-- Botón para abrir el modal de agregar Tienda --}}
        <x-jet-button wire:click="$toggle('showAddModal')">
            Agregar
        </x-jet-button>
    @endif


    {{-- Modal de agregar Tienda --}}
    <x-jet-dialog-modal wire:model="showAddModal">
        <x-slot name="title">
            Agrega datos para tu tienda
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Número Teléfono
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.numero_telefono" class="w-full" />
                    <x-jet-input-error for="createForm.numero_telefono" />
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Dirección Tienda
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.direccion_tienda" class="w-full" />
                    <x-jet-input-error for="createForm.direccion_tienda" />
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Número Cuenta
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.numero_cuenta" class="w-full" />
                    <x-jet-input-error for="createForm.numero_cuenta" />
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Nombre Titular
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.nombre_titular" class="w-full" />
                    <x-jet-input-error for="createForm.nombre_titular" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Tipo de Cuenta
                    </x-jet-label>
                    <x-jet-input wire:model="createForm.tipo_cuenta" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="createForm.tipo_cuenta" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Banco
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.banco" class="w-full" />
                    <x-jet-input-error for="createForm.banco" />
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Correo para recibir pagos  
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.correodePagos" class="w-full" />
                    <x-jet-input-error for="createForm.correodePagos" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('showAddModal')" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled">
                Agregar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    {{-- Scripts --}}
    @push('scripts')
        <script>
            Livewire.on('deleteTienda', tiendaId => {
                Swal.fire({
                    title: '¿Querés eliminar esta tienda?',
                    text: "No podrás deshacer esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok, dale',
                    cancelButtonText: 'Mejor no',
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('delete', tiendaId); // Cambio aquí
                        Swal.fire(
                            '¡Eliminado!',
                            'La tienda fue eliminada.',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
