<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdventureWorksDWBuildVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AdventureWorksDWBuildVersion', function (Blueprint $table) {
            $table->string('DBVersion', 50)->nullable();
            $table->dateTime('VersionDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AdventureWorksDWBuildVersion');
    }
}
