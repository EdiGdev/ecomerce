<?php

namespace Database\Seeders;


use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categorías
        $categories = [
            [
                'name' => 'Arma tu mercado',
                'slug' => 'arma-tu-mercado',
                'icon' => '<i class="fas fa-shopping-basket"></i>',
            ],
            [
                'name' => 'Frutas y Verduras',
                'slug' => 'frutas-y-verduras',
                'icon' => '<i class="fas fa-apple-alt"></i>',
            ],
            [
                'name' => 'Lácteos y Huevos',
                'slug' => 'lacteos-y-huevos',
                'icon' => '<i class="fas fa-cheese"></i>',
            ],
            [
                'name' => 'Arroz, Granos y Pastas',
                'slug' => 'arroz-granos-y-pastas',
                'icon' => '<i class="fas fa-utensils"></i>',
            ],
            [
                'name' => 'Aceites, Sal y Endulzantes',
                'slug' => 'aceites-sal-y-endulzantes',
                'icon' => '<i class="fas fa-cookie-bite"></i>',
            ],
            [
                'name' => 'Despensa',
                'slug' => 'despensa',
                'icon' => '<i class="fas fa-shopping-cart"></i>',
            ],
            [
                'name' => 'Pollo, Carne y Pescado',
                'slug' => 'pollo-carne-y-pescado',
                'icon' => '<i class="fas fa-drumstick-bite"></i>',
            ],
            [
                'name' => 'Carnes Frías y Embutidos',
                'slug' => 'carnes-frias-y-embutidos',
                'icon' => '<i class="fas fa-bacon"></i>',
            ],
            [
                'name' => 'Sazonadores, Salsas, Sopas',
                'slug' => 'sazonadores-salsas-sopas',
                'icon' => '<i class="fas fa-pepper-hot"></i>',
            ],
            [
                'name' => 'Pan, Arepas y Galletas',
                'slug' => 'pan-arepas-y-galletas',
                'icon' => '<i class="fas fa-bread-slice"></i>',
            ],
            [
                'name' => 'Café, Té y Chocolate',
                'slug' => 'cafe-te-y-chocolate',
                'icon' => '<i class="fas fa-coffee"></i>',
            ],
            [
                'name' => 'Bebidas',
                'slug' => 'bebidas',
                'icon' => '<i class="fas fa-glass-cheers"></i>',
            ],
            [
                'name' => 'Congelados',
                'slug' => 'congelados',
                'icon' => '<i class="fas fa-snowflake"></i>',
            ],
            [
                'name' => 'Cuidado de la Ropa',
                'slug' => 'cuidado-de-la-ropa',
                'icon' => '<i class="fas fa-tshirt"></i>',
            ],
            [
                'name' => 'Aseo del Hogar',
                'slug' => 'aseo-del-hogar',
                'icon' => '<i class="fas fa-broom"></i>',
            ],
            [
                'name' => 'Cuidado Personal',
                'slug' => 'cuidado-personal',
                'icon' => '<i class="fas fa-user"></i>',
            ],
            [
                'name' => 'Bebés',
                'slug' => 'bebes',
                'icon' => '<i class="fas fa-baby"></i>',
            ],
            [
                'name' => 'Mascotas',
                'slug' => 'mascotas',
                'icon' => '<i class="fas fa-paw"></i>',
            ],
            [
                'name' => 'Licores',
                'slug' => 'licores',
                'icon' => '<i class="fas fa-cocktail"></i>',
            ],
            [
                'name' => 'Droguería',
                'slug' => 'drogueria',
                'icon' => '<i class="fas fa-pills"></i>',
            ],
            [
                'name' => 'Hogar',
                'slug' => 'hogar',
                'icon' => '<i class="fas fa-home"></i>',
            ],
        ];

       
        foreach ($categories as $categoryData) {
            $category = Category::factory()->create($categoryData);
        
            $brands = [];

            switch ($category->name) {
                case 'Arma tu mercado':
                    $brands = [
                        'Supermaxi',
                        'Aki',
                        'Megamaxi',
                    ];
                    break;
                case 'Frutas y Verduras':
                    $brands = [
                        'Dole',
                        'DelMonte',
                        'AgroAndino',
                       
                    ];
                    break;
                case 'Lácteos y Huevos':
                    $brands = [
                        'Alpina',
                        'Nestlé',
                        'Danone',
                       
                    ];
                    break;
                case 'Arroz, Granos y Pastas':
                    $brands = [
                        'Lucchetti',
                        'Tío Ben',
                        'El Rosado',
                       
                    ];
                    break;
                case 'Aceites, Sal y Endulzantes':
                    $brands = [
                        'Girasol',
                        'Kraft',
                        'La Fabril',
                       
                    ];
                    break;
                case 'Despensa':
                    $brands = [
                        'Campbell\'s',
                        'Knorr',
                        'Hellmann\'s',
                      
                    ];
                    break;
                case 'Pollo, Carne y Pescado':
                    $brands = [
                        'Don Pollo',
                        'Tresmontes Lucchetti',
                        'Supermaxi Carnes',
                       
                    ];
                    break;
                case 'Carnes Frías y Embutidos':
                    $brands = [
                        'Campofrío',
                        'Tulip',
                        'Smithfield',
                       
                    ];
                    break;
                case 'Sazonadores, Salsas, Sopas':
                    $brands = [
                        'Maggi',
                        'McIlhenny',
                        'Heinz',
                       
                    ];
                    break;
                case 'Pan, Arepas y Galletas':
                    $brands = [
                        'Artiach',
                        'Gullón',
                        'Vieira',
                       
                    ];
                    break;
                case 'Café, Té y Chocolate':
                    $brands = [
                        'Juan Valdez',
                        'Nescafé',
                        'Cadbury',
                        
                    ];
                    break;
                case 'Bebidas':
                    $brands = [
                        'Coca-Cola',
                        'Pepsi',
                        'Inca Kola',
                        
                    ];
                    break;
                case 'Congelados':
                    $brands = [
                        'Frutabar',
                        'Helados de Paila',
                        'La Fuente',
                       
                    ];
                    break;
                case 'Cuidado de la Ropa':
                    $brands = [
                        'Ariel',
                        'Suavitel',
                        'Foca',
                        
                    ];
                    break;
                case 'Aseo del Hogar':
                    $brands = [
                        'Lysol',
                        'Clorox',
                        'Mr. Músculo',
                       
                    ];
                    break;
                case 'Cuidado Personal':
                    $brands = [
                        'Colgate',
                        'Listerine',
                        'Rexona',
                       
                    ];
                    break;
                case 'Bebés':
                    $brands = [
                        'Pampers',
                        'Huggies',
                        'Johnson\'s Baby',
                       
                    ];
                    break;
                case 'Mascotas':
                    $brands = [
                        'Purina',
                        'Pedigree',
                        'Whiskas',
                       
                    ];
                    break;
                case 'Licores':
                    $brands = [
                        'Pilsener',
                        'Club',
                        'Negra Modelo',
                       
                    ];
                    break;
                case 'Droguería':
                    $brands = [
                        'Advil',
                        'Tylenol',
                        'Vick',
                    ];
                    break;
                case 'Hogar':
                    $brands = [
                        '3M',
                        'Rubbermaid',
                        'Scotch-Brite',
                        
                    ];
                    break;
                default:
                    break;
            }

            foreach ($brands as $brandName) {
                $brand = Brand::create(['name' => $brandName]);
                $brand->categories()->attach($category->id);
            }
        }
    }
}
