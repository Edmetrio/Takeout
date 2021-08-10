<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome')->unique();
            $table->string('icon')->nullable();
            $table->decimal('preco', 10,2);
            $table->string('estado')->default('on');
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
        Schema::dropIfExists('produto');
    }
}
