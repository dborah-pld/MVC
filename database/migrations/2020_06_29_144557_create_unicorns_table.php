<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnicornsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unicorns', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("tourniquet");
            $table->date("birth_date");
            $table->string("birth_place");
            $table->string("mane_color");
            $table->boolean("sex");
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
        Schema::dropIfExists('unicorns');
    }
}
