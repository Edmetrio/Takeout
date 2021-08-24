<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->uuid('id')->primary()->default('1fed24c2-0cd9-4c3c-80f6-d873601fa103');
            $table->uuid('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('pagamento_id')->default('1fed24c2-0cd9-4c3c-80f6-d873601fa103');
            $table->foreign('pagamento_id')->references('id')->on('pagamento')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('valor_total', 20,2);
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
        Schema::dropIfExists('venda');
    }
}
