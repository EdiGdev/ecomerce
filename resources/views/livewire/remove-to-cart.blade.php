<div x-data="{ confirmDestroy: false }">
    <div>
        <a x-on:click="confirmDestroy = true" class="cursor-pointer hover:underline inline-block mx-3">
            <i class="text-red-600 fas fa-trash"></i> Limpiar Carrito
        </a>
    </div>

    <!-- Confirmación de eliminación del carrito -->
    <div x-show="confirmDestroy" @click.away="confirmDestroy = false" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div @click.away="confirmDestroy = false" class="bg-white rounded-lg p-8 max-w-md">
            <p class="mb-4">¿Seguro de que quieres eliminar todos los productos del carrito de compras?</p>
            <div class="text-right">
                <button wire:click="destroy" @click="confirmDestroy = false" class="bg-red-500 text-white px-4 py-2 rounded-md">Sí, Eliminar</button>
                <button @click="confirmDestroy = false" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md ml-2">Mejor no</button>
            </div>
        </div>
    </div>
</div>
