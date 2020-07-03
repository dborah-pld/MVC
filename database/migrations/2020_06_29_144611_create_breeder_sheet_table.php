<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreederSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeder_sheet', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("unicorn_id")->unsigned();
            $table->foreign("unicorn_id")->references("id")->on("unicorns");
            $table->bigInteger("breeder_id")->unsigned();
            $table->foreign("breeder_id")->references("id")->on("users");
            $table->date("reproduction_date1");
            $table->date("reproduction_date2");
            $table->boolean("is_pregnant");
            $table->integer("nb_childs");
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
        Schema::dropIfExists('breeder_sheet');
    }
}
