<div>
    <div class="flex flex-col items-center justify-center px-4 w-full">
        <div x-data class="z-50 fixed bottom-0 justify-center p-4 overflow-x-hidden">
            <template x-for="(toast, index) in $store.toasts.list" :key="toast.id">
                <div x-show="toast.visible" $store.toasts.destroyToast(index)
                    x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 translate-y-2"
                    x-transition:enter-end="transform opacity-100" x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="transform translate-x-0 opacity-100"
                    x-transition:leave-end="transform translate-x-full opacity-0"
                    class="bg-gray-900 bg-gradient-to-r text-white p-3 rounded mb-3 shadow-lg flex items-center"
                    :class="{
                        'bg-blue-500': toast.type === 'info',
                        'bg-green-500': toast.type === 'success',
                        'bg-yellow-400': toast.type === 'warning',
                        'bg-red-600': toast.type === 'error',
                    }">
                    {{--   'from-blue-500 to-blue-600': toast.type === 'info', --}}
                    <div x-text="toast.message"></div>
                    <div class="hidden">
                        <svg x-show="toast.type == 'info'" class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="toast.type == 'success'" class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="toast.type == 'warning'" class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="toast.type == 'error'" class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                </div>
            </template>
        </div>
    </div>
</div>