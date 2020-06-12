<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('banner')->nullable();
            $table->string('image')->nullable();
            $table->uuid('client_id')->references('id')->on('clients');
            $table->uuid('team_id')->references('id')->on('teams');
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
        Schema::dropIfExists('projects');
        Schema::table('projects', function (Blueprint $table){
            $table->dropForeign('projects_client_id_foreign');
            $table->dropForeign('projects_team_id_foreign');
        });
    }
}
