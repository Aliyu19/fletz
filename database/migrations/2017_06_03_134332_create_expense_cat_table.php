<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateExpenseCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_cat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('user_id');
            $table->double('cost', 8, 2);
            $table->string('type',5);
            $table->nullableTimestamps();
            $table->softDeletes();
            $table->string('frequancy', 20)->nullable();

            

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_cat');
    }
}