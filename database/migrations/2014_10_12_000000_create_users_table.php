<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($collection) {
            // $collection->text("fullname");
            // $collection->text("mobile_number")->unique();
            // $collection->text("email")->unique();
            // $collection->text("password");
            // $collection->text("postal_code");
            // $collection->rememberToken();
            // $collection->timestamp('email_verified_at')->nullable();
            // $collection->list("address");
            // $collection->list("fav_list");
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
        Schema::dropIfExists('users');
    }
}
