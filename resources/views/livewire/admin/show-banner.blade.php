<div class="flex justify-center">
    <div class="container py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">
            <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para cargar imágenes que
                aparecerán
                en el banner</h1>

            <form wire:submit.prevent="submit" enctype="multipart/form-data" class="w-full">

                <div class="mb-6">
                    <input
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        wire:model="link" name="link" type="text"
                        placeholder="Proporcione una url para esta imagen ">

                    <x-jet-input-error for="link"></x-jet-input-error>

                </div>

                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white dark:hover:bg-bray-800 dark:bg-gray-700 hover:shadow-md hover:shadow-cyan-500 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    para
                                    cargar</span></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (recomendado. 1400x400px)
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" wire:model="file" name="file"
                            id="{{ $rand }}" />
                    </label>
                </div>

                <x-jet-input-error for="file"></x-jet-input-error>


                <div class="mt-6 flex justify-center">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Agregar
                    </button>
                </div>


            </form>
        </div>
        @if ($banners->count())
            <x-table-responsive class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
                <div class="px-6 py-4 bg-white">
                    <h1 class="text-lg font-semibold text-gray-700">BANNERS</h1>
                </div>


                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Orden
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Imagen
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="banners">
                        @foreach ($banners as $banner)
                            <tr data-id="{{ $banner->id }}">
                                <td class="px-1 py-2 text-center whitespace-nowrap">
                                    <p class="inline-flex justify-center items-center text-xl">{{ $banner->order }}</p>
                                </td>
                                <td class="px-1 py-2 w-max whitespace-nowrap handle cursor-pointer">
                                    <img class="h-32" src="{{ Storage::url($banner->url) }}" alt="">
                                </td>
                                <td class="px-1 py-2 whitespace-nowrap">
                                    <div class="flex justify-center items-center gap-1">
                                        <button  wire:click="subirImage({{ $banner }})"
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="16 12 12 8 8 12" />  <line x1="12" y1="16" x2="12" y2="8" /></svg>
                                            Subir
                                        </button>
                                
                                        <button  wire:click="bajarImage({{ $banner }})"
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="8 12 12 16 16 12" />  <line x1="12" y1="8" x2="12" y2="16" /></svg>
                                            Bajar
                                        </button>
                                
                                        <button wire:click="delete({{ $banner }})"
                                            class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:outline-none transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"   viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg>
                                            Eliminar
                                        </button>
                                    </div>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </x-table-responsive>
        @else
            <div class="flex flex-col items-center my-4">
                <p class="text-lg text-gray-700 mt-4">No existe ningun Banner.</p>
            </div>
        @endif
        @push('script')
            <!-- jsDelivr :: Sortable :: Latest (https://www.jsdelivr.com/package/npm/sortablejs) -->
            <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
            <script>
                new Sortable(banners, {
                    handle: '.handle',
                    animation: 150,
                    ghostClass: 'bg-gray-100',
                    store: {
                        set: function(sortable) {
                            const arreglo = sortable.toArray();

                            Livewire.emitTo('admin.show-banner', 'sortBanners', arreglo);
                        }
                    }
                });


                Dropzone.options.myAwesomeDropzone = { // camelized version of the `id`
                    headers: {
                        'x-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    acceptedFiles: "image/*",
                    dictDefaultMessage: "Arrastre una imagen al recuadro",
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    // complete: function(file) {
                    //     this.removeFile(file);
                    // },
                    // queuecomplete: function() {
                    //     Livewire.emit('refreshProduct');
                    // }
                };
            </script>
        @endpush
    </div>
</div>
