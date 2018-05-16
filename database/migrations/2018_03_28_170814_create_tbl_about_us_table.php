<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_about_us', function (Blueprint $table) {
            $table->increments('aboutus_id');
            $table->string('aboutus_description');
            $table->string('mission_description');
            $table->string('plan_description');
            $table->string('vission_description');
            $table->tinyInteger('publication_status');
            $table->tinyInteger('deletion_status');
            $table->rememberToken();
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
        Schema::dropIfExists('tbl_about_us');
    }
}
