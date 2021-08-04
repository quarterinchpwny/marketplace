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
        Schema::create('users', function(Blueprint $table) {
            $table->integer('id', true);
            $table->string('image')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 60)->nullable();
            $table->integer('role_id')->nullable()->comment('1=Individual Lawyer, 2=Client, 3=Lawfirm');
            $table->string('remember_token', 100)->nullable();
            $table->integer('status')->nullable()->comment('0=Not Ative, 1=Active, 2=Suspended');
            $table->string('provider', 191)->nullable();
            $table->string('provider_id', 191)->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('referred_by', 191)->nullable();
            $table->string('affiliate_id', 191)->nullable()->unique('users_affiliate_id_unique');
            $table->boolean('terms_and_condition_agreement')->default(0);
            $table->timestamps();
            $table->softDeletes();
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
