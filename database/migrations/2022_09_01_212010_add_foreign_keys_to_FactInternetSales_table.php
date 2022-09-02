<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFactInternetSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('FactInternetSales', function (Blueprint $table) {
            $table->foreign(['ProductKey'], 'FK_FactInternetSales_DimProduct')->references(['ProductKey'])->on('DimProduct')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['OrderDateKey'], 'FK_FactInternetSales_DimDate')->references(['DateKey'])->on('DimDate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['DueDateKey'], 'FK_FactInternetSales_DimDate1')->references(['DateKey'])->on('DimDate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ShipDateKey'], 'FK_FactInternetSales_DimDate2')->references(['DateKey'])->on('DimDate')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['CustomerKey'], 'FK_FactInternetSales_DimCustomer')->references(['CustomerKey'])->on('DimCustomer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['PromotionKey'], 'FK_FactInternetSales_DimPromotion')->references(['PromotionKey'])->on('DimPromotion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['CurrencyKey'], 'FK_FactInternetSales_DimCurrency')->references(['CurrencyKey'])->on('DimCurrency')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['SalesTerritoryKey'], 'FK_FactInternetSales_DimSalesTerritory')->references(['SalesTerritoryKey'])->on('DimSalesTerritory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('FactInternetSales', function (Blueprint $table) {
            $table->dropForeign('FK_FactInternetSales_DimProduct');
            $table->dropForeign('FK_FactInternetSales_DimDate');
            $table->dropForeign('FK_FactInternetSales_DimDate1');
            $table->dropForeign('FK_FactInternetSales_DimDate2');
            $table->dropForeign('FK_FactInternetSales_DimCustomer');
            $table->dropForeign('FK_FactInternetSales_DimPromotion');
            $table->dropForeign('FK_FactInternetSales_DimCurrency');
            $table->dropForeign('FK_FactInternetSales_DimSalesTerritory');
        });
    }
}
