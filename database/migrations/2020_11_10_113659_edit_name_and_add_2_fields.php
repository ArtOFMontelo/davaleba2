<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditNameAndAdd2Fields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->id()
            ;
            $table->string("name",50);
            $table->string('make')->default("No information");
            $table->float('model')->default("No information");
            $table->float('license_number')->default("No information");
            $table->float('weight')->default("No information");
            $table->float("registration_year")->default("No information");
        });
 
    }
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
