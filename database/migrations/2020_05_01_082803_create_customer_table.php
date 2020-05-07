<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')->unique();
            $table->string('name');
            $table->string('passwd');
            $table->integer('coach_id')->unsigned();
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
        Schema::table('customer', function(Blueprint $table) {
            $table->dropForeign('customer_coach_id_foreign');
        });
        Schema::dropIfExists('customer');
    }
}
