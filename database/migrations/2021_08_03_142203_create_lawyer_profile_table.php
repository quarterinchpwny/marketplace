<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_profile', function(Blueprint $table) {
            $table->integer('lawyer_profile_id', true);
            $table->integer('user_id')->nullable()->index('user_id')->comment('mapped to lx_users');
            $table->integer('lawyer_type_id')->nullable()->index('FK_lx_lawyer_profile_lx_ref_lawyer_types')->comment('mapped to lx_ref_lawyer_types');
            $table->integer('specialization_id')->nullable()->index('specialization')->comment('mapped to lx_ref_specialization table');
            $table->integer('lawfirm_id')->nullable()->index('lawfirm_id');
            $table->string('first_name', 50)->nullable();
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('contact_number', 50)->nullable();
            $table->string('address1', 150)->nullable();
            $table->string('city', 150)->nullable();
            $table->string('province', 150)->nullable();
            $table->string('gender', 2)->nullable()->comment('M or F');
            $table->string('marital_status', 20)->nullable()->comment('Single, Married, Separated, Widow');
            $table->string('citizenship', 50)->nullable();
            $table->string('roll_number', 191)->nullable();
            $table->dateTime('admitted_at')->nullable();
            $table->integer('available')->default(0);
            $table->string('bank_account_name', 191)->nullable();
            $table->string('bank_account_number', 191)->nullable();
            $table->string('bank_account_branch')->nullable();
            $table->string('bank_account_type')->nullable();
            $table->string('timezone')->nullable();
            $table->string('ibp_chapter', 191)->nullable();
            $table->string('ibp_number', 191)->nullable();
            $table->string('mcle_number', 191)->nullable();
            $table->date('ibp_date_issued')->nullable();
            $table->date('mcle_date_issued')->nullable();
            $table->date('mcle_date_of_expiry')->nullable();
            $table->string('facebook')->nullable();
            $table->string('country', 191)->nullable();
            $table->integer('tin_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->boolean('has_mcle')->nullable();
            $table->boolean('terms_and_condition_agreement')->default(0);
            $table->string('status', 191)->default('Schedule Later');
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
        Schema::dropIfExists('lawyer_profile');
    }
}
