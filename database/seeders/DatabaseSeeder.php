<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Database\Seeders\ColorProductSeeder;
use Database\Seeders\ColorSeeder;
use Database\Seeders\ColorSizeSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\SubcategorySeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //crea carpetas
        Storage::disk('public')->deleteDirectory('categories');
        Storage::disk('public')->deleteDirectory('subcategories');
        Storage::disk('public')->deleteDirectory('products');

        Storage::disk('public')->makeDirectory('categories');
        Storage::disk('public')->makeDirectory('subcategories');
        Storage::disk('public')->makeDirectory('products');

        $this->call(UserSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ColorSizeSeeder::class);
        $this->call(DepartmentSeeder::class);
       // $this->call(RoleSeeder::class);
    }
}
