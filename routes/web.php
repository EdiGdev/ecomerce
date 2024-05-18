 <?php

    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\FacebookController;
    use App\Http\Controllers\GoogleController;
    use App\Http\Controllers\MessageController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\ProductsController;
    use App\Http\Controllers\ReviewController;
    use App\Http\Controllers\SearchController;
    use App\Http\Controllers\WalletController;
    use App\Http\Controllers\WebhooksController;
    use App\Http\Controllers\WelcomeController;
    use App\Http\Livewire\CreateOrder;
    use App\Http\Livewire\PaymentConfirm;
    use App\Http\Livewire\PaymentOrder;
    use App\Http\Livewire\ShoppingCart;
    use App\Models\Order;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Route;


    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('storage-link', function () {
        Artisan::call('storage:link');
        return 'Storage link created!';
    });

    Route::post('webhooks', WebhooksController::class);
 

    Route::get('/', WelcomeController::class)->name('home');

    Route::get('search', SearchController::class)->name('search');

    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);

    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

    Route::get('/auth/facebook', [FacebookController::class, 'redirectToFacebook']);

    Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

    //apunta los enlaces
    Route::middleware(['check.pending.orders'])->group(function () {
        Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

        Route::get('products/{product}', [ProductsController::class, 'show'])->name('products.show');
    });
    
    Route::post('reviews/{product}', [ReviewController::class, 'store'])->name('review.store');
    Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

    Route::get('product/{product}/sendWhatsApp', [ProductsController::class, 'sendWhatsAppMessage'])->name('product.wp');

    Route::middleware(['auth', 'verified'])->group(function () { //autentica las vista a través del mildware

        Route::get('orden/enviar-datos-por-wp', [OrderController::class, 'sendWhatsAppMessage'])->name('orders.wp');

        Route::get('orden/{order}/enviar-datos-de-pago', PaymentConfirm::class)->name('orders.paymentconfirm');

        //nos lleva a los pedidos
        Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

        Route::get('orders/create', CreateOrder::class)->name('orders.create');

        Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');

        Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');

        Route::get('/Wallet', [WalletController::class, 'index'])->name('wallet.index');

        Route::get('message/{message}', [MessageController::class, 'show'])->name('message.show');

        Route::get('messages', [MessageController::class, 'message'])->name('messages.index');

        Route::post('message', [MessageController::class, 'store'])->name('message.store');

        Route::middleware(['auth:sanctum', 'verified'])->get('/hacer', [MessageController::class, 'index'])->name('new');
    });

    Route::get('terminos-y-condiciones', function () {
        return view('terminosycondiciones');
    })->name('terminosycondiciones');

    Route::get('politicas-de-privacidad', function () {
        return view('politicasdeprivacidad');
    })->name('politicasdeprivacidad');

    Route::get('preguntas-frecuentes', function () {
        return view('preguntasfrecuentes');
    })->name('preguntasfrecuentes');
    
    Route::get('pruebaEmail', function () {
        return view('emails.order.create');
    })->name('pruebaemail');
    


   // Route::get('login/{driver}', [LoginController::class, 'redirectToProvider']);
   
   // Route::get('login/{driver}/callback', [LoginController::class, 'handleProviderCallback']);
