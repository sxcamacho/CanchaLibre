<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('companies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('uuid', 36);
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->integer('state');
            $table->integer('city');
            $table->string('location');
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
        Schema::drop('companies');
	}

}
