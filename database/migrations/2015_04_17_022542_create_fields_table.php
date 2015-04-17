<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('fields', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('company_id');
            $table->string('title');
            $table->string('description');
            $table->boolean('active');
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
        Schema::drop('fields');
	}

}
