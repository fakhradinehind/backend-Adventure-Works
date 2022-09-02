<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DimProduct', function (Blueprint $table) {
            $table->increments('ProductKey');
            $table->string('ProductAlternateKey', 25)->nullable();
            $table->integer('ProductSubcategoryKey')->nullable();
            $table->char('WeightUnitMeasureCode', 3)->nullable();
            $table->char('SizeUnitMeasureCode', 3)->nullable();
            $table->string('EnglishProductName', 50);
            $table->string('SpanishProductName', 50);
            $table->string('FrenchProductName', 50);
            $table->decimal('StandardCost', 19, 4)->nullable();
            $table->boolean('FinishedGoodsFlag');
            $table->string('Color', 15);
            $table->smallInteger('SafetyStockLevel')->nullable();
            $table->smallInteger('ReorderPoint')->nullable();
            $table->decimal('ListPrice', 19, 4)->nullable();
            $table->string('Size', 50)->nullable();
            $table->string('SizeRange', 50)->nullable();
            $table->float('Weight', 0, 0)->nullable();
            $table->integer('DaysToManufacture')->nullable();
            $table->char('ProductLine', 2)->nullable();
            $table->decimal('DealerPrice', 19, 4)->nullable();
            $table->char('Class', 2)->nullable();
            $table->char('Style', 2)->nullable();
            $table->string('ModelName', 50)->nullable();
            $table->binary('LargePhoto')->nullable();
            $table->string('EnglishDescription', 400)->nullable();
            $table->string('FrenchDescription', 400)->nullable();
            $table->string('ChineseDescription', 400)->nullable();
            $table->string('ArabicDescription', 400)->nullable();
            $table->string('HebrewDescription', 400)->nullable();
            $table->string('ThaiDescription', 400)->nullable();
            $table->string('GermanDescription', 400)->nullable();
            $table->string('JapaneseDescription', 400)->nullable();
            $table->string('TurkishDescription', 400)->nullable();
            $table->dateTime('StartDate')->nullable();
            $table->dateTime('EndDate')->nullable();
            $table->string('Status', 7)->nullable();

            $table->unique(['ProductAlternateKey', 'StartDate'], 'AK_DimProduct_ProductAlternateKey_StartDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DimProduct');
    }
}
