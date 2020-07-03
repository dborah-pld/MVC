<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_sheet', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("unicorn_id")->unsigned();
            $table->foreign("unicorn_id")->references("id")->on("licornes");
            $table->bigInteger("seller_id")->unsigned();
            $table->foreign("seller_id")->references("id")->on("users");
            $table->string("references");
            $table->float("price");
            $table->string("sell_place");
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
        Schema::dropIfExists('seller_sheet');
    }
}
