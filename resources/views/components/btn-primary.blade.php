<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center h-10 w-10 p-1 text-sm font-medium text-white bg-blue-500  border border-blue-300 rounded-full focus:outline-none hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 dark:bg-blue-800 dark:text-blue-400 dark:border-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-600 dark:focus:ring-blue-700']) }}>
    {{ $slot }}
</button>
