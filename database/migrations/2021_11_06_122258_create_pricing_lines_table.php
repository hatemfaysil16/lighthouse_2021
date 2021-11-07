<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_lines', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_two')->nullable();
            $table->string('pricing')->nullable();
            $table->string('month')->nullable();
            $table->string('currency')->nullable();
            $table->longText('pricing_desc')->nullable();  
            $table->string('button')->nullable();
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
        Schema::dropIfExists('pricing_lines');
    }
}
