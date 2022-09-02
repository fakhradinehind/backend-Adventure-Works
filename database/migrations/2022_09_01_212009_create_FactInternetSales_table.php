<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactInternetSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FactInternetSales', function (Blueprint $table) {
            $table->integer('ProductKey');
            $table->integer('OrderDateKey');
            $table->integer('DueDateKey');
            $table->integer('ShipDateKey');
            $table->integer('CustomerKey');
            $table->integer('PromotionKey');
            $table->integer('CurrencyKey');
            $table->integer('SalesTerritoryKey');
            $table->string('SalesOrderNumber', 20);
            $table->tinyInteger('SalesOrderLineNumber');
            $table->tinyInteger('RevisionNumber');
            $table->smallInteger('OrderQuantity');
            $table->decimal('UnitPrice', 19, 4);
            $table->decimal('ExtendedAmount', 19, 4);
            $table->float('UnitPriceDiscountPct', 0, 0);
            $table->float('DiscountAmount', 0, 0);
            $table->decimal('ProductStandardCost', 19, 4);
            $table->decimal('TotalProductCost', 19, 4);
            $table->decimal('SalesAmount', 19, 4);
            $table->decimal('TaxAmt', 19, 4);
            $table->decimal('Freight', 19, 4);
            $table->string('CarrierTrackingNumber', 25)->nullable();
            $table->string('CustomerPONumber', 25)->nullable();
            $table->dateTime('OrderDate')->nullable();
            $table->dateTime('DueDate')->nullable();
            $table->dateTime('ShipDate')->nullable();

            $table->primary(['SalesOrderNumber', 'SalesOrderLineNumber']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FactInternetSales');
    }
}
