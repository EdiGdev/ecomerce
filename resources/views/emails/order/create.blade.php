<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    @php
        $tienda = \App\Models\Tienda::find(1);
     //  $order = \App\Models\Order::find(19);
        $user = \App\Models\User::find($order->user_id);
        $envioData = json_decode($order->envio, true);
        $items = json_decode($order->content, true);

    @endphp



    <div style="margin:0;padding:0;font-family:Arial">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <table align="center" cellpadding="0" cellspacing="0"
                            style="border-collapse:collapse;min-width:360px;width:600px">
                            <tbody>
                                <tr>
                                    <td align="center" style="background-color:#38B6FF;height:64px">
                                        {{-- <a href="" style="text-decoration:none" target="_blank">
                                            <img src="{{ asset('img/logo.png') }}" height="200px" width="200px"
                                                alt="logo">
                                        </a> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding-top:24px;padding-bottom:40px">
                                        <table align="center" cellpadding="0" cellspacing="0"
                                            style="border-collapse:collapse;width:85%">

                                            <tbody>
                                                <tr>
                                                    <td align="center">

                                                        <img src="{{ asset('img/portada.png') }}" alt="Initial-image"
                                                            style="display:block;min-height:200px;max-height:240px;min-width:360px;max-width:432px"
                                                            class="CToWUd a6T" data-bit="iit" tabindex="0">
                                                        <div class="a6S" dir="ltr"
                                                            style="opacity: 0.01; left: 468px; top: 289px;">
                                                            <div id=":mz" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q"
                                                                role="button" tabindex="0"
                                                                aria-label="Descargar el archivo adjunto "
                                                                jslog="91252; u014N:cOuCgd,Kr2w4b,xr6bB; 4:WyIjbXNnLWY6MTc4MzE5NTg0ODg2MTMzNzkzOCJd"
                                                                data-tooltip-class="a1V" jsaction="JIbuQc:.CLIENT"
                                                                data-tooltip="Descargar">
                                                                <div class="akn">
                                                                    <div class="aSK J-J5-Ji aYr">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center" style="padding-top:32px">
                                                        <span
                                                            style="color:#38B6FF;font-weight:bold;font-size:32px;line-height:36px">

                                                            Recibimos
                                                            tu
                                                            pedido

                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-top:16px" align="left">

                                                        <span
                                                            style="color:#4d4d4d;font-size:24px;font-weight:bold;line-height:26px">¡Hola
                                                            {{ $user->name }}!</span>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-top:16px">
                                                        <p style="font-size:16px;line-height:22px">

                                                            Nos encargaremos de preparar tu pedido tan pronto como
                                                            realices el pago de tu orden.

                                                        </p>
                                                        <p
                                                            style="color:#4d4d4d;font-size:16px;font-weight:bold;line-height:22px">
                                                            ¡Gracias por hacer tus compras con nosotros!
                                                        </p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-top:20px">
                                                        <div
                                                            style="min-width:300px;max-width:400px;background-color:#fee5e6;border-radius:2px;border-width:1.5px 1.5px 1.5px 8px;border-style:solid;border-color:#fee5e6">
                                                            <div style="padding:16px 16px 16px 16px">
                                                                <div style="margin-bottom:0;display:flex">
                                                                    <img src="https://ci4.googleusercontent.com/proxy/YRfIZglukN7_p5SiVfDwQh_I5kNX05w64CeLA_BaxoEIkpV4QY_wfnnv2V3nta3aDAz-dszgrsGngeoLtZQUr2EQl5cSDBgM_1Jkosc3=s0-d-e1-ft#https://d50xhnwqnrbqk.cloudfront.net/images/email/alert.png"
                                                                        alt="check" class="CToWUd" data-bit="iit">
                                                                    <span
                                                                        style="color:#c41214;font-size:18px;font-weight:bold;line-height:24px;margin-left:8px">

                                                                        Pago
                                                                        pendiente

                                                                    </span>
                                                                </div>
                                                                <div
                                                                    style="padding-left:34px;padding-top:2px;padding-right:0;padding-bottom:0;margin-top:0;min-width:240px;max-width:316px;font-size:14px;line-height:20px;color:#4d4d4d;display:flex">

                                                                    @php

                                                                        $tiempoRegistro = new DateTime($order->created_at);
                                                                        $tiempoLimite = clone $tiempoRegistro; // Clona el objeto para evitar modificar el original
                                                                        $tiempoLimite->modify('+1 hour');
                                                                        $formattedTiempoLimite = $tiempoLimite->format('h:i:s A');
                                                                    @endphp

                                                                    <p>
                                                                        Realiza el pago antes de la hora:
                                                                        <b> {{ $formattedTiempoLimite }} </b>.
                                                                        Una vez pasado este tiempo, tu orden será
                                                                        cancelada.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-top:40px">
                                                        <table width="100%">
                                                            <tbody>
                                                                <tr style="height:100px">
                                                                    <td>
                                                                        <img src="https://ci6.googleusercontent.com/proxy/rcfU1rR_PsWggBX4H9Mm6ZrQKUIZoQWjlX4NEtcRr9SXAvOietlJ-fWJlJp_QMgxAaeclh6qkzNgKSsTY6ToK3xhNVzE3PLqVCBJF3wkPRne=s0-d-e1-ft#https://d50xhnwqnrbqk.cloudfront.net/images/email/pay_cash.png"
                                                                            alt="Pay cash" class="CToWUd"
                                                                            data-bit="iit">
                                                                    </td>
                                                                    <td>
                                                                        <div style="margin-left:10px">
                                                                            <span
                                                                                style="display:block;font-size:18px;line-height:24px;color:#4d4d4d">
                                                                                Lo que pagaras
                                                                            </span>
                                                                            <span
                                                                                style="display:block;font-size:20px;font-weight:bold;line-height:28px;color:#4d4d4d;padding-top:4px">
                                                                                Total:
                                                                                $
                                                                                {{ $order->total }}
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr style="height:100px">
                                                                    <td style="padding-top:10px">
                                                                        <img src="https://ci6.googleusercontent.com/proxy/twYYBSH5l9GRy3j0zHsf7nHYuzMbLdKPGJ1Jo7gd5Y24ofbR-x8B6GAdRutFcNtgfzMIWQIZ4WixA5zALquF_ys6I89b2oHL7g0bcMc1jtR1zIz8=s0-d-e1-ft#https://d50xhnwqnrbqk.cloudfront.net/images/email/direcciones.png"
                                                                            alt="Address map" class="CToWUd"
                                                                            data-bit="iit">
                                                                    </td>
                                                                    <td style="padding-top:10px">

                                                                        @if ($order->envio_type === '1')
                                                                            <div style="margin-left:10px">
                                                                                <span
                                                                                    style="display:block;font-size:18px;line-height:24px;color:#4d4d4d">
                                                                                    Los productos deben ser recogidos en
                                                                                    tienda
                                                                                    {{ $tienda->direccion_tienda }}

                                                                                </span>

                                                                            </div>
                                                                        @else
                                                                        @endif

                                                                        <div style="margin-left:10px">
                                                                            <span
                                                                                style="display:block;font-size:18px;line-height:24px;color:#4d4d4d">
                                                                                Entrega en

                                                                            </span>
                                                                            <span
                                                                                style="display:block;font-size:20px;font-weight:bold;line-height:28px;color:#4d4d4d;padding-top:4px">

                                                                                {{ $envioData['address'] . $envioData['department'] . ' - ' . $envioData['city'] . ' - ' . $envioData['district'] }}
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-top:80px">
                                                        <span
                                                            style="color:#38B6FF;font-size:22px;font-weight:bold;line-height:30px;display:block">
                                                            Resumen de tu compra
                                                        </span>
                                                        <span style="color:#000000;font-size:14px;line-height:26px">
                                                            Nº {{ $order->id }}
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-top:24px">
                                                        <table cellpadding="0" cellspacing="0"
                                                            style="border-collapse:collapse" width="100%">
                                                            <thead>
                                                                <tr
                                                                    style="text-transform:uppercase;color:#4d4d4d;font-size:11px;font-weight:bold;line-height:14px">
                                                                    <th align="left">Producto</th>
                                                                    <th align="left">Cant.</th>
                                                                    <th align="right">Precio Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Itera sobre los productos del pedido -->
                                                                @foreach ($items as $item)
                                                                    <tr
                                                                        style="border-style:none none solid none;border-width:2px;border-color:#e5e5e5;width:100%">
                                                                        <td
                                                                            style="padding-top:16px;padding-bottom:16px">
                                                                            <div style="display:flex">
                                                                                <img src="{{ $item['options']['image'] }}"
                                                                                    alt="{{ $item['name'] }}"
                                                                                    width="48" height="48"
                                                                                    style="margin-right:8px"
                                                                                    class="CToWUd" data-bit="iit">
                                                                                <div style="color:#4d4d4d">
                                                                                    <span
                                                                                        style="font-size:12px;line-height:16px;width:120px;display:block">{{ $item['name'] }}</span>
                                                                                    <span
                                                                                        style="font-size:12px;font-weight:bold;line-height:14px">$
                                                                                        {{ $item['subtotal'] }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            style="padding-top:16px;padding-bottom:16px">
                                                                            <span
                                                                                style="color:#4d4d4d;font-size:12px;font-weight:bold;line-height:14px;background-color:#f2f2f2;border-radius:100%;padding:10px 10px 10px 10px">{{ $item['qty'] }}</span>
                                                                        </td>
                                                                        <td style="padding-top:16px;padding-bottom:16px"
                                                                            align="right">
                                                                            <span style="font-size:12px;color:#4d4d4d"
                                                                                align="right">$
                                                                                {{ $item['subtotal'] }}</span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <!-- ... (Código posterior) ... -->

                                                <tr>
                                                    <td style="color:#4d4d4d;padding-top:24px">
                                                        <div style="display:flex;padding-top:8px">
                                                            <div style="width:50%;text-align:left">
                                                                <span
                                                                    style="font-size:14px;line-height:16px">Subtotal</span>
                                                            </div>
                                                            <div style="width:50%;text-align:right">
                                                                <span style="font-size:14px;line-height:16px">$
                                                                    {{ $order->total - $order->shipping_cost }} </span>
                                                            </div>
                                                        </div>
                                                        <div style="display:flex;padding-top:8px">
                                                            <div style="width:50%;text-align:left">
                                                                <span style="font-size:14px;line-height:16px">Costo
                                                                    domicilio</span>
                                                            </div>
                                                            <div style="width:50%;text-align:right">
                                                                <span style="font-size:14px;line-height:16px">$
                                                                    {{ $order->shipping_cost }}</span>
                                                            </div>
                                                        </div>
                                                        <div style="display:flex;padding-top:8px">
                                                            <div style="width:50%;text-align:left">
                                                                <span
                                                                    style="font-size:14px;line-height:16px">Descuento</span>
                                                            </div>
                                                            <div style="width:50%;text-align:right">
                                                                <span style="font-size:14px;line-height:16px">$
                                                                    0 </span>
                                                            </div>
                                                        </div>
                                                        <div style="display:flex;padding-top:16px">
                                                            <div style="width:50%;text-align:left">
                                                                <span
                                                                    style="font-size:22px;font-weight:bold;line-height:28px">Total:</span>
                                                            </div>
                                                            <div style="width:50%;text-align:right">
                                                                <span
                                                                    style="font-size:22px;font-weight:bold;line-height:28px">$
                                                                    {{ $order->total }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td align="center" style="padding-top:41px">
                                                        <img src="https://ci3.googleusercontent.com/proxy/JdXe8ksDyn6c3R22Tj1x4DHJPksttbabWfMMGloVflaG9PO8gyKc4wN72Uui1W-ZqltARpJ5tFKsK-Mkd5C_tgt4UaJogAhufJpHyxfEitD1NWA=s0-d-e1-ft#https://d50xhnwqnrbqk.cloudfront.net/images/email/sent_email.png"
                                                            alt="Sent email" style="display:inline-block"
                                                            class="CToWUd" data-bit="iit">
                                                        <span
                                                            style="display:block;font-size:16px;font-weight:bold;line-height:26px;color:#38B6FF">
                                                            ¿Necesitas
                                                            ayuda?
                                                        </span>
                                                        <div style="color:#4d4d4d;font-size:14px;line-height:26px">
                                                            Contáctanos
                                                            a
                                                            través
                                                            de
                                                            la
                                                            sección
                                                            de
                                                            ayuda
                                                            en
                                                            tu
                                                            pedido
                                                            o
                                                            escríbenos
                                                            a


                                                            <a href="mailto:{{ $tienda->correodePagos }}?Subject=Pedido%20Super%20VI8WOR1700588064&amp;body=Pregunta%20sobre%20pedido%20Merqueo%20super%20VI8WOR1700588064%20del%20s%c3%a1bado%2025%20de%20Noviembre."
                                                                style="text-decoration:none" target="_blank">
                                                                <span
                                                                    style="color:#0071ed;font-weight:bold">{{ $tienda->correodePagos }}</span>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="background-color:#38B6FF;height:277px">
                                        <table align="center" cellpadding="0" cellspacing="0"
                                            style="border-collapse:collapse;min-width:300px;max-width:430px">
                                            <tbody>
                                                <tr>
                                                    <td style="width:300px;text-align:center">
                                                        <span
                                                            style="color:#ffffff;font-size:28px;font-weight:bold;line-height:28px">
                                                            Merca con visión y gana con pasión
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="padding-top:20px">
                                                        <a href="#" style="text-decoration:none"
                                                            target="_blank">
                                                            <img src="https://ci5.googleusercontent.com/proxy/myAb8JzOGds0PAf-TS1jXbXy9K9FjNnlfyeSpi1r2meexEaTR3MTJejAQC-t5Os2H_AFemSF01UdCu3N7w4NO7dCC497OT0fKGJ5Mx9kugE0=s0-d-e1-ft#https://d50xhnwqnrbqk.cloudfront.net/images/email/facebook.png"
                                                                alt="Facebook"
                                                                style="display:inline-block;margin-right:15px"
                                                                class="CToWUd" data-bit="iit">
                                                        </a>
                                                        <a href="#" style="text-decoration:none"
                                                            target="_blank">
                                                            <img src="https://ci4.googleusercontent.com/proxy/B_3NpaB6XCWLyXx1pXhtqnId6isiqpTq5wcElZe5pIn0jqfVw62YalPSwF2pVDr-EdivbLSuwhZ3_BOGpTPyeOSgbvcpDCzi5v68aZUfhcWVug=s0-d-e1-ft#https://d50xhnwqnrbqk.cloudfront.net/images/email/instagram.png"
                                                                alt="Instagram" style="display:inline-block"
                                                                class="CToWUd" data-bit="iit">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
