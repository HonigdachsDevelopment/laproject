<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_project', function (Blueprint $table) {
            $table->id();
            $table->uuid('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->bigInteger('project_id')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::dropIfExists('client_project');
        Schema::table('client_project', function (Blueprint $table){
            $table->dropForeign('client_project_client_id_foreign');
            $table->dropForeign('client_project_project_id_foreign');
        });
    }
}
