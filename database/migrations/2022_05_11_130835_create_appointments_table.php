<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('ci')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('level')->nullable();
            $table->string('ocupation')->nullable();
            $table->string('address')->nullable();
            $table->string('date')->nullable();
            $table->string('departement')->nullable();
            $table->string('message')->nullable();
            
            $table->string('user_id')->nullable();

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
        Schema::dropIfExists('appointments');
    }
};
