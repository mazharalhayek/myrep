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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            //beacuse there is a relationship between this table and the category table we will have to define the foriegn key...
            //the relaionship is ONE TO MANY (One category belongs to more than one institution)
            $table->foreignId("category_id")->constrained('institution_categories');
            $table->string('name');
            $table->integer('order')->unique();//can't several institutions have the same order.
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
        Schema::dropIfExists('institutions');
    }
};
