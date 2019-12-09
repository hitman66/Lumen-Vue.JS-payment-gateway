<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCusOrderTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cus_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shipname')->unique()->notNullable();
            $table->date('date')->nullable();
            $table->string('email')->notNullable();
            $table->string('merchant_id')->notNullable();
            $table->decimal('total_amount', 13, 4)->notNullable();
            $table->string('shipcountry')->default('MY');;
            $table->string('telephone')->notNullable();
            $table->string('merchant_cred')->notNullable();
            $table->decimal('gst_amount', 13, 4)->default('0.00');
            $table->decimal('svc_amount', 13, 4)->default('0.00');
            $table->decimal('del_amount', 13, 4)->default('0.00');
            $table->string('customfield1')->nullable();
            $table->string('customfield2')->nullable();
            $table->string('customfield3')->nullable();
            $table->string('customfield4')->nullable();
            $table->integer('wc_id')->nullable();
            $table->integer('returncode')->nullable();
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
        Schema::dropIfExists('cus_order');
    }
}
