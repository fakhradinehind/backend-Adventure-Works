<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DimDate', function (Blueprint $table) {
            $table->integer('DateKey')->primary();
            $table->date('FullDateAlternateKey')->unique('AK_DimDate_FullDateAlternateKey');
            $table->tinyInteger('DayNumberOfWeek');
            $table->string('EnglishDayNameOfWeek', 10);
            $table->string('SpanishDayNameOfWeek', 10);
            $table->string('FrenchDayNameOfWeek', 10);
            $table->tinyInteger('DayNumberOfMonth');
            $table->smallInteger('DayNumberOfYear');
            $table->tinyInteger('WeekNumberOfYear');
            $table->string('EnglishMonthName', 10);
            $table->string('SpanishMonthName', 10);
            $table->string('FrenchMonthName', 10);
            $table->tinyInteger('MonthNumberOfYear');
            $table->tinyInteger('CalendarQuarter');
            $table->smallInteger('CalendarYear');
            $table->tinyInteger('CalendarSemester');
            $table->tinyInteger('FiscalQuarter');
            $table->smallInteger('FiscalYear');
            $table->tinyInteger('FiscalSemester');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DimDate');
    }
}
