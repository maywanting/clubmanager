<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerBuildingClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_building_class', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('building_class_id')->unsigned();
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('building_class_id')
                ->references('id')
                ->on('building_class')
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
        Schema::table('customer_building_class', function(Blueprint $table) {
            $table->dropForeign('customer_building_class_customer_id_foreign');
        });
        Schema::table('customer_building_class', function(Blueprint $table) {
            $table->dropForeign('customer_building_class_building_class_id_foreign');
        });
        Schema::dropIfExists('customer_building_class');
    }
}
