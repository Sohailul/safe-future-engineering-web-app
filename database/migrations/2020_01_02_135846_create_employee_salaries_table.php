<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->string('designation');
            $table->string('months');
            $table->string('salary');
            $table->string('tday');
            $table->string('govholy');
            $table->string('weekholy');
            $table->string('absent');
            $table->string('overtime');
            $table->string('awday');
            $table->string('wday');
            $table->string('pdpot');
            $table->string('transport_bill');
            $table->string('allowance');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_salaries');
    }
}
