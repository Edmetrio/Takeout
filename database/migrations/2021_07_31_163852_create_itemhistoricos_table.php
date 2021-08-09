<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemhistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemhistorico', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('historico_id');
            $table->foreign('historico_id')->references('id')->on('historico')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('quantidade',20,2);
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
        Schema::dropIfExists('itemhistorico');
    }
}
