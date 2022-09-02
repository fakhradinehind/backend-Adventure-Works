<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDimEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DimEmployee', function (Blueprint $table) {
            $table->foreign(['ParentEmployeeKey'], 'FK_DimEmployee_DimEmployee')->references(['EmployeeKey'])->on('DimEmployee')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['SalesTerritoryKey'], 'FK_DimEmployee_DimSalesTerritory')->references(['SalesTerritoryKey'])->on('DimSalesTerritory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DimEmployee', function (Blueprint $table) {
            $table->dropForeign('FK_DimEmployee_DimEmployee');
            $table->dropForeign('FK_DimEmployee_DimSalesTerritory');
        });
    }
}
