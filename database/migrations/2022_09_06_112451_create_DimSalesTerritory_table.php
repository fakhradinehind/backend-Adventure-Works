<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimSalesTerritoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DimSalesTerritory', function (Blueprint $table) {
            $table->increments('SalesTerritoryKey');
            $table->integer('SalesTerritoryAlternateKey')->nullable()->unique('AK_DimSalesTerritory_SalesTerritoryAlternateKey');
            $table->string('SalesTerritoryRegion', 50);
            $table->string('SalesTerritoryCountry', 50);
            $table->string('SalesTerritoryGroup', 50)->nullable();
            $table->binary('SalesTerritoryImage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DimSalesTerritory');
    }
}
