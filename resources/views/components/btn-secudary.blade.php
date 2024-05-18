<button {{ $attributes->merge(['type' => 'button',  'class' => "  inline-flex items-center justify-center h-10 w-10 p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"]) }}>
    {{ $slot }}
</button>
