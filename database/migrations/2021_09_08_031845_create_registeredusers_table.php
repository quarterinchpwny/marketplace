<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeredusers', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('username', 45);
            $table->string('password', 45);
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->string('email', 45)->nullable();
            $table->string('contact_no', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registeredusers');
    }
}
