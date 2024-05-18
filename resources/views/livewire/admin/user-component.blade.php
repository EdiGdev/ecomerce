<div>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                Usuarios
            </h2>
            <x-button-link class="ml-auto" href="{{ route('admin.users.create') }}">
                Agregar Usuario
            </x-button-link>
        </div>
    </x-slot>

    <div class="container-menu py-12">
        <div class="px-4 sm:px-6 lg:px-8 border-none">
            <div class="flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 md:px-6 lg:px-8">

                        <x-jet-label value="Filtra por rol del usuario" />
                        <select class="md:w-1/6 w-full form-control mt-3" wire:model="selectedRole">
                            @foreach ($roles as $key => $role)
                                <option value="{{ $key }}">{{ $role }}</option>
                            @endforeach
                        </select>


                    </div>
                </div>
            </div>
        </div>


        <x-table-responsive>
            <div class="px-6 py-4">
                <x-jet-input wire:model="search" type="text" class="w-full"
                    placeholder="Escriba algo para filtrar" />
            </div>
            @if (count($users))

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-center">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Codigo
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Cambiar de Rol
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Saldo
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Asignar Saldo </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr wire:key="{{ $user->email }}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user->unique_code }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user->email }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div x-data="{
                                        confirmRoleChange: false,
                                        selectedRole: '{{ count($user->getRoleNames()) > 0 ? $user->getRoleNames()[0] : '' }}',
                                        originalRole: '{{ count($user->getRoleNames()) > 0 ? $user->getRoleNames()[0] : '' }}'
                                    }">
                                        <select x-model="selectedRole" class="form-control mt-3"
                                            x-on:change="confirmRoleChange = true">
                                            <option value="cliente" :selected="selectedRole === 'cliente'">Cliente M &
                                                G</option>
                                            <option value="recarga" :selected="selectedRole === 'recarga'">Punto de
                                                Recarga</option>
                                            <option value="admin" :selected="selectedRole === 'admin'">Administrador
                                            </option>
                                        </select>

                                        <div x-show="confirmRoleChange" x-cloak @click.away="confirmRoleChange = false"
                                            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
                                            <div @click.away="confirmRoleChange = false"
                                                class="bg-white rounded-lg p-8 max-w-lg">
                                                <p class="mb-4">¿Estás seguro de cambiar el rol?</p>
                                                <div class="text-right">
                                                    <button
                                                        @click="confirmRoleChange = false; $wire.assignRole({{ $user->id }}, selectedRole)"
                                                        class="bg-red-500 text-white px-4 py-2 rounded-md">Sí</button>
                                                    <button
                                                        @click="confirmRoleChange = false; selectedRole = originalRole"
                                                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md ml-2">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <div>
                                            $ {{ number_format(floor($user->balance), 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>

                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="#" wire:click.prevent="openModal({{ $user->id }})"
                                        class="text-cyan-600 hover:text-cyan-900">Aumentar Saldo</a>
                                    <br>
                                    <a href="#" wire:click.prevent="openModalx2({{ $user->id }})"
                                        class="text-orange-600 hover:text-orange-900">Disminuir Saldo</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No hay ningún registro coincidente
                </div>
            @endif
            @if ($users->hasPages())
                <div class="px-6 py-4">
                    {{ $users->links() }}
                </div>
            @endif
        </x-table-responsive>
    </div>

    <x-jet-dialog-modal wire:model="openModal">
        <x-slot name="title">
            Aumentar Saldo
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">
                <div>
                    <x-jet-label>
                        Cantidad a Aumentar
                    </x-jet-label>
                    <x-jet-input wire:model="cantidad" type="number" class="w-full mt-1" />
                    <x-jet-input-error for="cantidad" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="aumentar_saldo" wire:loading.attr="disabled" wire:target="aumentar_saldo">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>



    <x-jet-dialog-modal wire:model="openModalx2">
        <x-slot name="title">
            Disminuir Saldo
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">
                <div>
                    <x-jet-label>
                        Cantidad a Disminuir
                    </x-jet-label>
                    <x-jet-input wire:model="cantidad" type="number" class="w-full mt-1" />
                    <x-jet-input-error for="cantidad" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="disminuir_saldo" wire:loading.attr="disabled"
                wire:target="disminuir_saldo">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>


</div>
