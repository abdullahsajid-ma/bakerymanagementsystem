<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakeryitems', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('itemcatgory');
            $table->string('itemname');
            $table->string('itemprice');
            $table->string('itemdescription');
            $table->string('image');
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
        Schema::dropIfExists('bakeryitems');
    }
};
