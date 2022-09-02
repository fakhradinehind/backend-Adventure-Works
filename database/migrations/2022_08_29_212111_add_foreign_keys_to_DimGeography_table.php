<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDimGeographyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DimGeography', function (Blueprint $table) {
            $table->foreign(['SalesTerritoryKey'], 'FK_DimGeography_DimSalesTerritory')->references(['SalesTerritoryKey'])->on('DimSalesTerritory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DimGeography', function (Blueprint $table) {
            $table->dropForeign('FK_DimGeography_DimSalesTerritory');
        });
    }
}
