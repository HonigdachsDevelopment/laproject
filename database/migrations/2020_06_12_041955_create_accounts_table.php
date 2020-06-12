<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('banner')->nullable();
            $table->string('image')->nullable();
            $table->uuid('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('accounts');
        Schema::table('accounts', function (Blueprint $table){
            $table->dropForeign('accounts_user_id_foreign');
        });
    }
}
