<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mn_companies', function (Blueprint $table) {
            //$table->increments('id');
            $table->uuid('uuid');
            $table->primary('uuid');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('home_phone', 25)->nullable();
            $table->string('desk_phone', 25)->nullable();
            $table->string('mobile_phone', 25)->nullable();
            $table->string('fax', 25)->nullable();
            $table->string('tax_code', 25)->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->enum('status', ['ACTIVE','INACTIVE'])->default('INACTIVE');
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
        Schema::dropIfExists('mn_companies');
    }
}
