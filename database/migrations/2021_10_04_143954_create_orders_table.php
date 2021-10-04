<?php

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
        Schema::create('orders', function ($collection) {
            // $collection->index('user_id');
            // $collection->list('payment_ids');
            // $collection->list('order_items');
            // $collection->text('address');
            // $collection->text('subtotal');
            // $collection->text('discount');
            // $collection->text('total');
            // $collection->timestamps();
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
