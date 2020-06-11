<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
        
            $table->char('name'. 100);
            $table->char('surname'. 100);
            $table->char('mail'. 100);

            $table->char('street', 124);
            $table->char('city', 124);
            $table->char('plc', 80);
            $table->char('co', 80);
            $table->char('state', 124);
            $table->char('country'. 6);

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
        Schema::dropIfExists('contacts');
    }
}
