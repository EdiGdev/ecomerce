<div x-data="{ open: @entangle('isModalOpen') }">

    <button class="shrink-0 p-1 md:block hidden" @click.prevent="open = !open">
        <x-mappin color="gray"> </x-mappin>
    </button>

    <button class="shrink-0 p-1 -mx-2 md:hidden" @click.prevent="open = !open">
        <x-mappin color="gray"> </x-mappin>
    </button>

    <div x-show="open" x-cloak class="z-40 fixed inset-0 bg-black opacity-50 [&[x-cloak]]:hidden"></div>

    <div>
        {{-- z-50 mt-2 md:origin-top-right absolute md:top-full md:-translate-x-1/2 max-w-2xl w-full bg-white border border-slate-200 p-2 rounded-lg shadow-xl  --}}

        <div class=" fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto max-h-screen flex justify-center [&[x-cloak]]:hidden"
            x-show="open" @click.outside="open = false" x-cloak>
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button class="absolute top-0 right-0 p-4" @click.prevent="open = false">
                        <svg class="w-6 h-6 text-gray-300 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>

                    <h5 class="px-6  py-4  mb-4 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        A dónde llevamos tu pedido?
                    </h5>

                    <div>
                        <div class="px-6 pb-6 grid grid-cols-2 gap-6">
                            <div>
                                <x-jet-label value="Departamento" />
                                <select class="form-control w-full" wire:model="department_id">
                                    <option value="" disabled selected>Seleccione un departamento</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="department_id" />
                            </div>
                            <div>
                                <x-jet-label value="Ciudad" />
                                <select class="form-control w-full" wire:model="city_id">
                                    <option value="" disabled selected>Seleccione un ciudad</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="city_id" />
                            </div>
                            <div>
                                <x-jet-label value="Distrito" />
                                <select class="form-control w-full" wire:model="district_id">
                                    <option value="" disabled selected>Seleccione un distrito</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="district_id" />
                            </div>
                            <div>
                                <x-jet-label value="Dirección" />
                                <x-jet-input class="w-full" wire:model="address" type="text" />
                                <x-jet-input-error for="address" />
                            </div>
                            <div class="col-span-2">
                                <x-jet-label value="Referencia" />
                                <x-jet-input class="w-full" wire:model="reference" type="text" />
                                <x-jet-input-error for="reference" />
                            </div>
                        </div>

                        <!-- Botón para guardar la dirección -->
                        <div class="px-6 pb-6">
                            <button wire:click="saveAddress" class="px-4 py-2 text-white bg-blue-500 rounded">Guardar
                                Dirección</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
