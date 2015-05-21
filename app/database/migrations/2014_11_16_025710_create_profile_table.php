<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile', function(Blueprint $table)
		{
			$table->integer('userid')->unsigned()->default(0);
            $table->string('profilePic')->default('http://b2.com/Images/Anony.jpg');
            $table->string('about',255);
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('profile');
	}

}
