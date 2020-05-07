<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('seat_num');
            $table->boolean('rest_flag');
            $table->integer('coach_id')->unsigned();
            $table->text('description');
            $table->timestamps();

            $table->foreign('coach_id')
                ->references('id')
                ->on('coach')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('building_class', function(Blueprint $table) {
            $table->dropForeign('building_class_coach_id_foreign');
        });
        Schema::dropIfExists('building_class');
    }
}
