<x-guest-layout>

    <div class="font-sans text-gray-900 antialiased bg-gray-100">
        <div class="sm:py-12">
            <div class="flex max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg lg:max-w-4xl">
                <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image:url('/img/login.svg')"></div>

                <div class="w-full min-h-screen sm:min-h-0 px-6 py-8 md:px-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">
                        <a href="/">Merca y Gana</a>
                    </h2>
                    <p class="text-xl text-center text-gray-600 dark:text-gray-200">¡Crea una cuenta!</p>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="name">Nombre</label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                                name="name" value="{{ old('name') }}" type="text" id="name" required
                                autofocus autocomplete="name">
                        </div>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="email">Correo</label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                                name="email" value="{{ old('email') }}" type="email" id="email" required>
                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="email">Telefono</label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                                name="phone" value="{{ old('phone') }}" type="tel" id="phone" required>
                        </div>
                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="password">Contraseña</label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                                name="password" type="password" id="password" required autocomplete="new-password">
                        </div>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="password_confirmation">Confirmar Contraseña</label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                                name="password_confirmation" type="password" id="password_confirmation" required
                                autocomplete="new-password">
                        </div>

                        <!-- Other fields and checkboxes go here if needed -->

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
                            <button
                                class="ml-4 w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600 disabled:opacity-25"
                                type="submit">Registrarse</button>
                        </div>
                    </form>

                    <div class="relative flex py-5 items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">O</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>


                    <a href="/auth/google"
                        class="flex items-center justify-center mt-4 text-gray-600 border rounded-lg dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div class="px-4 py-2">
                            <svg class="w-6 h-6" viewBox="0 0 40 40">
                                <path
                                    d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                    fill="#FFC107"></path>
                                <path
                                    d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                    fill="#FF3D00"></path>
                                <path
                                    d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                    fill="#4CAF50"></path>
                                <path
                                    d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                    fill="#1976D2"></path>
                            </svg>
                        </div>

                        <span class="w-5/6 px-4 py-3 font-bold text-center">Registrate con Google</span>
                    </a>
                    <a href="/auth/facebook"
                        class="flex items-center justify-center mt-4 text-gray-600 border rounded-lg">
                        <div class="px-4 py-2">
                            <svg width="20" height="20" fill="currentColor" class="mr-2 text-blue-600"
                                viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z">
                                </path>
                            </svg>
                        </div>

                        <span class="w-5/6 px-4 py-3 font-bold text-center">Registrate con Facebook</span>
                    </a>


                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
