<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DimEmployee', function (Blueprint $table) {
            $table->increments('EmployeeKey');
            $table->integer('ParentEmployeeKey')->nullable();
            $table->string('EmployeeNationalIDAlternateKey', 15)->nullable();
            $table->string('ParentEmployeeNationalIDAlternateKey', 15)->nullable();
            $table->integer('SalesTerritoryKey')->nullable();
            $table->string('FirstName', 50);
            $table->string('LastName', 50);
            $table->string('MiddleName', 50)->nullable();
            $table->boolean('NameStyle');
            $table->string('Title', 50)->nullable();
            $table->date('HireDate')->nullable();
            $table->date('BirthDate')->nullable();
            $table->string('LoginID', 256)->nullable();
            $table->string('EmailAddress', 50)->nullable();
            $table->string('Phone', 25)->nullable();
            $table->char('MaritalStatus', 1)->nullable();
            $table->string('EmergencyContactName', 50)->nullable();
            $table->string('EmergencyContactPhone', 25)->nullable();
            $table->boolean('SalariedFlag')->nullable();
            $table->char('Gender', 1)->nullable();
            $table->tinyInteger('PayFrequency')->nullable();
            $table->decimal('BaseRate', 19, 4)->nullable();
            $table->smallInteger('VacationHours')->nullable();
            $table->smallInteger('SickLeaveHours')->nullable();
            $table->boolean('CurrentFlag');
            $table->boolean('SalesPersonFlag');
            $table->string('DepartmentName', 50)->nullable();
            $table->date('StartDate')->nullable();
            $table->date('EndDate')->nullable();
            $table->string('Status', 50)->nullable();
            $table->binary('EmployeePhoto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DimEmployee');
    }
}
