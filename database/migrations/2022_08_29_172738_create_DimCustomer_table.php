<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DimCustomer', function (Blueprint $table) {
            $table->increments('CustomerKey');
            $table->integer('GeographyKey')->nullable();
            $table->string('CustomerAlternateKey', 15)->unique('IX_DimCustomer_CustomerAlternateKey');
            $table->string('Title', 8)->nullable();
            $table->string('FirstName', 50)->nullable();
            $table->string('MiddleName', 50)->nullable();
            $table->string('LastName', 50)->nullable();
            $table->boolean('NameStyle')->nullable();
            $table->date('BirthDate')->nullable();
            $table->char('MaritalStatus', 1)->nullable();
            $table->string('Suffix', 10)->nullable();
            $table->string('Gender', 1)->nullable();
            $table->string('EmailAddress', 50)->nullable();
            $table->decimal('YearlyIncome', 19, 4)->nullable();
            $table->tinyInteger('TotalChildren')->nullable();
            $table->tinyInteger('NumberChildrenAtHome')->nullable();
            $table->string('EnglishEducation', 40)->nullable();
            $table->string('SpanishEducation', 40)->nullable();
            $table->string('FrenchEducation', 40)->nullable();
            $table->string('EnglishOccupation', 100)->nullable();
            $table->string('SpanishOccupation', 100)->nullable();
            $table->string('FrenchOccupation', 100)->nullable();
            $table->char('HouseOwnerFlag', 1)->nullable();
            $table->tinyInteger('NumberCarsOwned')->nullable();
            $table->string('AddressLine1', 120)->nullable();
            $table->string('AddressLine2', 120)->nullable();
            $table->string('Phone', 20)->nullable();
            $table->date('DateFirstPurchase')->nullable();
            $table->string('CommuteDistance', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DimCustomer');
    }
}
