<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            1 => ['Filete de res', 'Pechuga de pollo', 'Manzanas', 'Queso cheddar', 'Aceite de oliva'],
            2 => ['Peras', 'Plátanos', 'Zanahorias orgánicas', 'Leche entera', 'Mantequilla sin sal'],
            3 => ['Leche descremada', 'Queso suizo', 'Yogur natural', 'Huevos orgánicos', 'Mantequilla de almendras'],
            4 => ['Arroz integral', 'Lentejas verdes', 'Fideos de trigo integral', 'Habas secas', 'Quinua orgánica'],
            5 => ['Aceite de coco', 'Sal rosa del Himalaya', 'Azúcar de caña orgánico', 'Miel de abeja pura', 'Vinagre balsámico de Módena'],
            6 => ['Pan de centeno', 'Pan de avena', 'Arepas de maíz', 'Galletas de avena', 'Galletas saladas integrales'],
            7 => ['Café colombiano', 'Té verde de alta calidad', 'Chocolate amargo 70%', 'Té matcha', 'Café instantáneo descafeinado'],
            8 => ['Refrescos de cola', 'Zumos naturales', 'Agua embotellada mineral', 'Bebidas energéticas', 'Cervezas artesanales'],
            9 => ['Vegetales mixtos congelados', 'Pizzas de pepperoni', 'Helado de vainilla', 'Filete de pescado congelado', 'Pollo asado congelado'],
            10 => ['Detergente en polvo Tide', 'Suavizante de ropa Downy', 'Quitamanchas OxiClean', 'Perfume para ropa Lavanda', 'Blanqueador Clorox'],
            11 => ['Limpiadores multiusos', 'Desinfectantes Lysol', 'Pañuelos de papel Kleenex', 'Bolsas de basura Glad', 'Utensilios de limpieza Scotch-Brite'],
            12 => ['Champú Pantene', 'Gel de ducha Dove', 'Cepillos de dientes Oral-B', 'Maquinillas de afeitar Gillette', 'Crema hidratante Nivea'],
            13 => ['Pañales desechables Pampers', 'Leche para bebés Enfamil', 'Alimentos para bebés Gerber', 'Toallitas húmedas Huggies', 'Chupetes NUK'],
            14 => ['Comida para perros Purina Pro Plan', 'Comida para gatos Royal Canin', 'Arena para gatos Arm & Hammer', 'Juguetes para mascotas Kong', 'Champú para mascotas Hartz'],
            15 => ['Whisky Jack Daniel', 'Vodka Absolut', 'Ron Bacardi', 'Vino tinto Merlot', 'Cerveza IPA'],
            16 => ['Aspirina', 'Desinfectante de manos Purell', 'Vitaminas y suplementos Nature Made', 'Preservativos Durex', 'Pasta de dientes Colgate'],
            17 => ['Pañales para bebés', 'Fórmula infantil', 'Ropa de bebé', 'Juguetes para bebés', 'Artículos de cuidado del bebé'],
            18 => ['Comida para perros', 'Comida para gatos', 'Juguetes para mascotas', 'Productos de higiene para mascotas', 'Camas para mascotas'],
            19 => ['Whisky escocés', 'Vodka ruso', 'Ron añejo', 'Vino tinto reserva', 'Cerveza artesanal'],
            20 => ['Medicamentos sin receta', 'Productos de cuidado personal', 'Suministros de primeros auxilios', 'Productos para el hogar', 'Productos de higiene'],
            21 => ['Muebles para el hogar', 'Electrodomésticos', 'Decoración de interiores', 'Iluminación', 'Textiles para el hogar'],
        ];

        foreach ($subcategories as $categoryId => $subcategoryNames) {
            foreach ($subcategoryNames as $subcategoryName) {
                Subcategory::create([
                    'category_id' => $categoryId,
                    'name' => $subcategoryName,
                    'slug' => Str::slug($subcategoryName),
                ]);
            }
        }
    }
}
