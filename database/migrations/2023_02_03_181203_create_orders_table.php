<?php

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //una orden se genera en varios estados posibles
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('contact');
            $table->string('phone');
            $table->string('reference')->nullable();
            $table->enum('status', [
                Order::PENDIENTE, Order::RECIBIDO, Order::ENVIADO, Order::ENTREGADO,
                Order::ANULADO
            ])->default(Order::PENDIENTE);
            $table->enum('envio_type', [1, 2]);

            $table->decimal('shipping_cost', 10, 0);
            $table->decimal('total', 10, 0);

            $table->json('content');
            $table->json('envio')->nullable(); //almacena el departamento , ciudad, distrito
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
