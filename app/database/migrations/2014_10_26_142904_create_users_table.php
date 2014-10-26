<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->integer('user_type_id');
            $table->integer('office_id')->nullable();
            $table->string('name', 50);
            $table->string('mobile_number1', 25);
            $table->string('mobile_number2', 25)->nullable();
            $table->string('mobile_number3', 25)->nullable();
            $table->string('email', 20)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('address', 256)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('edited_by')->nullable();
            $table->enum('is_active', array(1, 0));
            $table->timestamps();
            $table->unique('mobile_number1');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
        Schema::dropIfExists('users');
	}

}
