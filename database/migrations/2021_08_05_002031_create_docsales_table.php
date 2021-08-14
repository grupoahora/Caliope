<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docsales', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('url');

            $table->unsignedBigInteger('form_id')->nullable();
            
            $table->unsignedBigInteger('sale_id')->nullable();
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('set null')->onUpdate('cascade');
            


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
        Schema::dropIfExists('docsales');
    }
}
