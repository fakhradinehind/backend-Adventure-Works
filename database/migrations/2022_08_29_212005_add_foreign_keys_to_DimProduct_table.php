<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDimProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DimProduct', function (Blueprint $table) {
            $table->foreign(['ProductSubcategoryKey'], 'FK_DimProduct_DimProductSubcategory')->references(['ProductSubcategoryKey'])->on('DimProductSubcategory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DimProduct', function (Blueprint $table) {
            $table->dropForeign('FK_DimProduct_DimProductSubcategory');
        });
    }
}
