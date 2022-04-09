<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiver', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('companyname',100);
            $table->string('city',100);
            $table->string('street',100);
            $table->string('postalcode',100);
            $table->string('email',100);
            $table->string('phonenumber',100);
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
        Schema::dropIfExists('receiver');
    }
}
