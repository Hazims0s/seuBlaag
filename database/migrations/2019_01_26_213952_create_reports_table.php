<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('reporterName');
            $table->string('reporterEmail');
            $table->char('reporterSection');
            $table->string('reportTitle');
            $table->char('reportStatus');
            $table->integer('priority');
            $table->string('reportDescription');
            $table->string('officeNo');
            $table->integer('category')->unsigned();
            $table->integer('branch')->unsigned();
        });

        Schema::table('report_updates', function($table){
            $table->foreign('branch')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
