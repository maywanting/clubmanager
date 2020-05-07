<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCoach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_coach', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('coach_id')->unsigned();
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::table('customer_coach', function(Blueprint $table) {
            $table->dropForeign('customer_coach_customer_id_foreign');
        });
        Schema::table('customer_coach', function(Blueprint $table) {
            $table->dropForeign('customer_coach_coach_id_foreign');
        });
        Schema::dropIfExists('customer_coach');
    }
}
