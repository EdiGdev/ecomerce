<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tienda;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(Product $product)
    {

        $more = $product->subcategory->products->where('id', '!=', $product->id)->take(3);

        return view('products.show', compact('product', 'more'));
    }

    public function sendWhatsAppMessage(Product $product)
    {
        $tienda = Tienda::first();
        
        $Text = "*¡Hola equipo de Merca y Gana!* 🌟\n\n";
        $Text .= "Espero que estén teniendo un excelente día. Me pongo en contacto con ustedes porque he estado explorando su catálogo y me ha llamado la atención uno de sus productos. Estoy interesado/a en obtener más información al respecto.\n\n";
    
        $Text .= "*Producto de Interés:*\n";
        $Text .= "Nombre: " . $product->name ."\n";
        $Text .= "Descripción: " . $product->description ."\n";

        $discountPercentage = $product->discount;
        $discountDecimal = $discountPercentage / 100;
        $discountedPrice = $product->price * (1 - $discountDecimal);

        $Text .= "Precio: $" . $discountedPrice ."\n\n";
    
        $Text .= "Me gustaría conocer más detalles sobre las características y cualquier oferta especial que tengan disponible. Además, ¿pueden proporcionarme información sobre los métodos de pago y el proceso de envío?\n\n";
        $Text .= "Agradezco de antemano su atención. Quedo a la espera de su pronta respuesta.\n\n";
        $Text .= "*Saludos cordiales*\n";

        $encodedMessage = urlencode($Text);

       
        $phoneNumber =$tienda->numero_telefono ;

        $whatsappURL = "https://api.whatsapp.com/send/?phone=" . $phoneNumber . "&text=" . $encodedMessage . "&app_absent=0";

        return redirect($whatsappURL);


    }
    
}
