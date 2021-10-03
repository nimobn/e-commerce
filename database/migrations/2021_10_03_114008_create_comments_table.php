<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function ($collection) {
            // $collection->index('product_id');
            $collection->index("title");
            // $collection->text("body");
            // $collection->boolean("buyer");
            // $collection->bollean("buy_recommend");
            // $collection->list("negative_tips");
            // $collection->list("posetive_tips");
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
        Schema::dropIfExists('comments');
    }
}
