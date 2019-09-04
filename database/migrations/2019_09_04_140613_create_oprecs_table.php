<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOprecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oprecs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('NRP')->unique();
            $table->string('department');
            $table->string('division');
            $table->string('essay_general');
            $table->string('essay_division');
            $table->string('CV');
            $table->string('KTM');
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
        Schema::dropIfExists('oprecs');
    }
}
