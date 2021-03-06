<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemvendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemvenda', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('venda_id');
            $table->foreign('venda_id')->references('id')->on('venda');
            $table->uuid('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->uuid('pagamento_id');
            $table->foreign('pagamento_id')->references('id')->on('pagamento');
            $table->decimal('quantidade', 20,2);
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
        Schema::dropIfExists('itemvenda');
    }
}
