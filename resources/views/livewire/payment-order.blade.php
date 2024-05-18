<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-6 container-menu py-8">
        <div class="order-2 lg:order-1 xl:col-span-3">
            <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
                <p class="text-gray-700 uppercase"><span class="font-semibold">Número de Orden:</span> {{ $order->id }}
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-lg font-semibold uppercase">Envío</p>
                        @if ($order->envio_type == 1)
                            <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                            <p class="text-sm">{{ $tienda->direccion_tienda }}</p>
                        @else
                            <p class="text-sm">Los productos serán enviados a:</p>
                            <p class="text-sm">{{ $envio->address }}</p>
                            <p>{{ $envio->department }} - {{ $envio->city }} - {{ $envio->district }}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <p class="text-lg font-semibold uppercase">Datos de contacto</p>
                    <p class="text-sm">Persona que recibirá el producto: {{ $order->contact }}</p>
                    <p class="text-sm">Teléfono de contacto: {{ $order->phone }}</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-700 mb-6">
                <p class="text-xl font-semibold mb-4">Resumen</p>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Precio</th>
                            <th>Cant</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">

                        @foreach ($items as $item)
                            <tr>
                                <td>
                                    <div class="flex">
                                        <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}"
                                            alt="">
                                        <article>
                                            <h1 class="font-bold">{{ $item->name }}</h1>
                                            <div class="flex text-xs">
                                                @isset($item->options->color)
                                                    Color: {{ __(ucfirst($item->options->color)) }}
                                                @endisset
                                                @isset($item->options->size)
                                                    {{ $item->options->size }}
                                                @endisset
                                            </div>
                                        </article>
                                    </div>
                                </td>
                                <td class="text-center">
                                    $ {{ number_format(floor($item->price), 0, ',', '.') }}
                                </td>
                                <td class="text-center">
                                    {{ $item->qty }}
                                </td>
                                <td class="text-center">


                                    $ {{ number_format(floor($item->price * $item->qty), 0, ',', '.') }}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="order-1 lg:order-2 xl:col-span-2">
            <div class="bg-white rounded-lg shadow-lg px-6 pt-6">
                <div class="flex justify-between items-center mb-4">
                    <img class="h-8" src="{{ asset('img/pagos.jpeg') }}" alt="">
                    <div class="text-gray-700">
                        <p class="text-sm font-semibold">
                            Subtotal: {{ $order->total - $order->shipping_cost }} &#36;
                        </p>
                        <p class="text-sm font-semibold">
                            Envío: {{ $order->shipping_cost }} &#36;
                        </p>
                        <p class="text-lg font-semibold uppercase">
                            Pago: {{ $order->total }} &#36;
                        </p>
                    </div>
                </div>

            </div>

            <div x-data="{ selected: 1 }">
                <ul aria-label="Accordion Control Group Buttons"
                    class="flex flex-col justify-center items-center space-y-1 text-slate-800">

                    <li class="flex flex-col w-full space-y-1">
                        <button aria-controls="content-5" aria-expanded="false" id="accordion-control-5"
                            @click="selected !== 5 ? selected = 5 : selected = null"
                            class="flex items-center w-full bg-white dark:text-gray-300 dark:bg-gray-900 p-3 rounded-md"
                            :aria-expanded="selected === 5 ? 'true' : 'false'">
                            <span class="mr-auto text-sm"><img class="inline h-6" src="" alt=""> Paga
                                con PayPal</span>
                            <svg xmlns="http://www.w3.org/2000/svg" aria-label="chevron"
                                :class="selected === 5 ? 'rotate-180' : ''" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div aria-hidden="true" id="content-5" x-show="selected === 5"
                            class="p-2 text-sm rounded bg-white dark:text-gray-300 dark:bg-gray-900 shadow"
                            :aria-hidden="selected === 5 ? 'false' : 'true'" style="display: none;"
                            x-transition.duration.400>

                            <div id="paypal-button-container"></div>

                        </div>
                    </li>

                    {{--  <li class="flex flex-col w-full space-y-1">
                        <button aria-controls="content-3" aria-expanded="false" id="accordion-control-3"
                            @click="selected !== 3? selected = 3 : selected = null"
                            class="flex items-center w-full bg-white dark:text-gray-300 dark:bg-gray-900 p-3 rounded-md"
                            :aria-expanded="selected === 3 ? 'true' : 'false'">
                            <span class="mr-auto text-sm"><img class="inline h-6"
                                    src="{{ asset('img/qr_simple.png') }}" alt=""> QR Simple</span>
                            <svg xmlns="http://www.w3.org/2000/svg" aria-label="chevron"
                                :class="selected === 3 ? 'rotate-180' : ''" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div aria-hidden="true" id="content-3" x-show="selected === 3"
                            class="p-2 text-sm rounded bg-white dark:text-gray-300 dark:bg-gray-900 shadow"
                            :aria-hidden="selected === 3 ? 'false' : 'true'" style="display: none;"
                            x-transition.duration.400>
                            Realiza tu pago a través del siguiente QR Simple:
                            <div class="flex justify-center">
                                <img class="w-full aspect-square max-w-lg" src="" alt="qr Merca y Gana">
                            </div>
                            <span class="inline-block my-2 text-red-500">IMPORTANTE: al momento de realizar tu
                                transferencia/depósito debes colocar tu <strong>número de pédido</strong> en el campo de
                                referencia.</span>
                            <span class="inline-block my-2">Tienes <strong>4 horas</strong> para realizar tu pago y
                                enviar los datos de la transacción al correo <span
                                    class="text-blue-500">pagos@mercaygana.com</span> o en tu cuenta mercaygana en
                                <strong>(Mis ordenes/enviar datos de pago)</strong></span>
                        </div>
                    </li> --}}
                    <li class="flex flex-col w-full space-y-1">
                        <button aria-controls="content-4" aria-expanded="false" id="accordion-control-4"
                            @click="selected !== 4 ? selected = 4 : selected = null"
                            class="flex items-center w-full bg-white dark:text-gray-300 dark:bg-gray-900 p-3 rounded-md"
                            :aria-expanded="selected === 4 ? 'true' : 'false'">
                            <span class="mr-auto text-sm"><img class="inline h-6" src="" alt="">
                                Deposito/transferencia
                                bancaria</span>
                            <svg xmlns="http://www.w3.org/2000/svg" aria-label="chevron"
                                :class="selected === 4 ? 'rotate-180' : ''" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div aria-hidden="true" id="content-4" x-show="selected === 4"
                            class="p-2 text-sm rounded bg-white dark:text-gray-300 dark:bg-gray-900 shadow"
                            :aria-hidden="selected === 4 ? 'false' : 'true'" style="display: none;"
                            x-transition.duration.400>
                            Realiza tu pago a través de deposito o transferencia utilizando la siguiente información:
                            <ul class="mt-2">
                                <li>Número de cuenta: <strong>{{ $tienda->numero_cuenta }}</strong></li>
                                <li>Nombre del titular: <strong>{{ $tienda->nombre_titular }}</strong></li>
                                <li>Tipo de Cuenta: <strong>{{ $tienda->tipo_cuenta }}</strong></li>
                                <li>Banco: <strong>{{ $tienda->banco }}</strong></li>
                            </ul>
                            <span class="inline-block my-2 text-red-500">IMPORTANTE: al momento de realizar tu
                                transferencia/depósito debes colocar tu <strong>número de pédido</strong> en el campo de
                                referencia.</span>
                            <span class="inline-block my-2">Tienes <strong>20 minutos </strong> para realizar tu pago y
                                enviar los datos de la transacción al correo <span
                                    class="text-blue-500">{{ $tienda->tipo_cuenta }}</span> o en tu cuenta mercaygana
                                en
                                <strong>(Mis Pedidos/enviar datos de pago) o da <a href="/orders/{{ $order->id }}">
                                        click a qui para ir
                                    </a></strong></span>
                        </div>
                    </li>

                    {{--  <li class="flex flex-col w-full space-y-1">
                        <button aria-controls="content-6" aria-expanded="false" id="accordion-control-6"
                            @click="selected !== 6 ? selected = 6 : selected = null"
                            class="flex items-center w-full bg-white dark:text-gray-300 dark:bg-gray-900 p-3 rounded-md"
                            :aria-expanded="selected === 6 ? 'true' : 'false'">
                            <span class="mr-auto text-sm"><img class="inline h-6" src="" alt="">Paga
                                con MercaWallet</span>
                            <svg xmlns="http://www.w3.org/2000/svg" aria-label="chevron"
                                :class="selected === 6 ? 'rotate-180' : ''" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div aria-hidden="true" id="content-6" x-show="selected === 6"
                            class="p-2 text-sm rounded bg-white dark:text-gray-300 dark:bg-gray-900 shadow"
                            :aria-hidden="selected === 6 ? 'false' : 'true'" style="display: none;"
                            x-transition.duration.400>
                            Aceptamos pagos con la moneda virtual "MercaWallet" para facilitar tu compra. Utiliza tu
                            billetera virtual para realizar el pago de forma rápida y segura. ¡Disfruta de la
                            conveniencia de nuestra moneda interna mientras adquieres tus productos!

                            <br>
                            <div class="flex justify-center">
                                <button wire:click="makePayment"
                                    class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-2">Pagar con
                                    MercaWallet</button>
                            </div>

                            @if ($errors->has('paymentError'))
                                <p class="text-red-500 mt-2">{{ $errors->first('paymentError') }}</p>
                            @endif
                        </div>
                    </li> --}}


                </ul>
            </div>


            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg px-6 py-4 mb-6 mt-6">
                <p class="text-gray-700 text-sm p-2">Puedes ponerte en contacto con nosotros.</p>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="bg-green-600 py-3 px-5 w-full rounded-sm text-white font-bold text-center text-xl flex items-center justify-center"
                    target="_blank"><i class="fa-brands fa-whatsapp mr-2"></i>
                    Envianos tu Orden</button>
            </div>

            <div id="popup-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                ¿Quieres enviarno la orden por WhatsApp ?
                            </h3>

                            <a href="{{ route('orders.wp', ['items' => $items, 'order' => $order->id]) }}"
                                id="whatsappButton" data-modal-hide="popup-modal"
                                class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Enviar
                            </a>

                            <a data-modal-hide="popup-modal" href="https://wa.me/{{ $tienda->numero_telefono }}"
                                target="_blank"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center ">
                                Mejor no</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    
        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=USD"></script>

        <script>
            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "{{ $order->total }}" //precio real del carrito
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                       // var transaction = orderData.purchase_units[0].payments.captures[0];
                      //  alert('Transaction ' + transaction.status + ': ' + transaction.id +
                          //  '\n\nSee console for all available details');
                        Livewire.emit('payOrder'); //recibe el evento desde el componente
                    });
                }
            }).render('#paypal-button-container');
        </script>
    @endpush
</div>
