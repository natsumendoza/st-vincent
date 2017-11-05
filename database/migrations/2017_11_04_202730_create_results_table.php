<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lrn');
            $table->string('e_percentage');
            $table->string('i_percentage');
            $table->string('s_percentage');
            $table->string('n_percentage');
            $table->string('t_percentage');
            $table->string('f_percentage');
            $table->string('p_percentage');
            $table->string('j_percentage');
            $table->integer('combination_id')->index()->unsigned()->nullable();
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
        Schema::dropIfExists('results');
    }
}
