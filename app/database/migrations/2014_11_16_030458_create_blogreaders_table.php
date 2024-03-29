<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogreadersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogreaders', function(Blueprint $table)
		{
            $table->integer('blogid')->unsigned()->default(0);
            $table->integer('readerid')->unsigned()->default(0);
            $table->foreign('blogid')->references('id')->on('blogs')->onDelete('cascade');
            $table->foreign('readerid')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogreaders');
	}

}
