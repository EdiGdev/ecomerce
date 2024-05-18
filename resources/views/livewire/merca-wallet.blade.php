<div>
    @php
        $subtotalValue = str_replace(',', '', Cart::subtotal());

        if (is_numeric($saldoActual) && is_numeric(str_replace('.', '', $subtotalValue))) {
            $saldoDespuesCompra = $saldoActual - $subtotalValue;
        } else {
            $saldoDespuesCompra = 0;
        }

    @endphp


    @if (is_numeric($saldoActual) && is_numeric(str_replace('.', '', $subtotalValue)))
        @if ($saldoDespuesCompra > 0)
            <span
                class="bg-green-100 text-green-800 text-md font-medium inline-flex items-center px-2.5 py-1.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
                Saldo MercaWallet:
                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 11 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138" />
                </svg>

                {{ $saldoDespuesCompra }}
            </span>
        @else
            <span
                class="bg-red-100 text-red-800 text-md font-medium inline-flex items-center px-2.5 py-1.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">
                Saldo MercaWallet:
                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 11 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138" />
                </svg>

                {{ $saldoDespuesCompra }}
            </span>
        @endif
    @endif


</div>
