<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartuns', function (Blueprint $table) {
            $table->bigIncrements('id_anime');
            $table->string('title');
            $table->string('image');
            $table->float('score', 3, 2);
            $table->integer('episodes');
            $table->string('studio');
            $table->string('source');
            $table->text('synopsis');
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
        Schema::dropIfExists('kartuns');
    }
}
