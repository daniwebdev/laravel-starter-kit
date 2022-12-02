<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            /* Premary Data */
			$table->id();
			$table->uuid('uuid')->unique()->index();
			$table->string('code')->unique()->index();
			$table->string('name');
			$table->string('phone')->unique();
			$table->string('email')->unique();
			$table->string('job')->nullable();
			$table->datetime('join_date');
			$table->date('date_of_brithday')->nullable();
			$table->string('brithday_place')->nullable();
			$table->text('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('coordinate')->nullable();

            /* For Bank Account */
			$table->string('account_number', 30)->nullable();
			$table->string('account_name', 90)->nullable();
			$table->unsignedBigInteger('bank_id')->nullable();

            /* Status */
            $table->string('status')->default('active');

            $table->bigInteger('user_id')->nullable()->unsigned();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
