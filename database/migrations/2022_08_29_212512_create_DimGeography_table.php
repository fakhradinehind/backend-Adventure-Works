<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimGeographyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DimGeography', function (Blueprint $table) {
            $table->increments('GeographyKey');
            $table->string('City', 30)->nullable();
            $table->string('StateProvinceCode', 3)->nullable();
            $table->string('StateProvinceName', 50)->nullable();
            $table->string('CountryRegionCode', 3)->nullable();
            $table->string('EnglishCountryRegionName', 50)->nullable();
            $table->string('SpanishCountryRegionName', 50)->nullable();
            $table->string('FrenchCountryRegionName', 50)->nullable();
            $table->string('PostalCode', 15)->nullable();
            $table->integer('SalesTerritoryKey')->nullable();
            $table->string('IpAddressLocator', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DimGeography');
    }
}
