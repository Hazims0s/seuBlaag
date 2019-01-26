<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('report_updates', function (Blueprint $table) {
           $table->increments('id');
            $table->engine = 'InnoDB';
            $table->string('comment');
            $table->integer('user_id')->unsigned();
            $table->integer('report_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('report_updates', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_updates');
    }
}
