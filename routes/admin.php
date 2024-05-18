<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Livewire\Admin\BrandComponent;
use App\Http\Livewire\Admin\CreateProduct;
use App\Http\Livewire\Admin\DepartmentComponent;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Admin\MercayGanaComponent;
use App\Http\Livewire\Admin\Payment;
use App\Http\Livewire\Admin\ShowBanner;
use App\Http\Livewire\Admin\ShowCategory;
use App\Http\Livewire\Admin\ShowCity;
use App\Http\Livewire\Admin\ShowDepartment;
use App\Http\Livewire\Admin\ShowProducts;
use App\Http\Livewire\Admin\UserComponent;

use App\Http\Livewire\CreateUser;
use App\Http\Livewire\EditUser;

use Illuminate\Support\Facades\Route;


Route::get('/', ShowProducts::class)->name('admin.index');

Route::get('products/create', CreateProduct::class)->name('admin.products.create');

Route::get('products/{product}/edit', EditProduct::class)->name('admin.products.edit');

Route::post('product/{product}/files', [ProductController::class, 'files'])->name('admin.products.files');

Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');

Route::get('categories/{category}', ShowCategory::class)->name('admin.categories.show');

Route::get('brands', BrandComponent::class)->name('admin.brands.index');

Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

Route::get('departments', DepartmentComponent::class)->name('admin.departments.index');

Route::get('departments/{department}', ShowDepartment::class)->name('admin.departments.show');

Route::get('cities/{city}', ShowCity::class)->name('admin.cities.show');

Route::get('users', UserComponent::class)->name('admin.users.index');

Route::get('users/create', CreateUser::class)->name('admin.users.create');

Route::get('users/{user}/edit', EditUser::class)->name('admin.users.edit');

Route::get('banners', ShowBanner::class)->name('admin.banners.show');

Route::post('banner/files', [BannerController::class, 'files'])->name('admin.banners.files');

Route::get('pagos', Payment::class)->name('admin.payments.show');

//Route::get('perfil/M&G', [MercayGanaController::class, 'index'])->name('admin.perfil_myg.show');

Route::get('perfil-myg', MercayGanaComponent::class)->name('admin.perfil_myg.show');