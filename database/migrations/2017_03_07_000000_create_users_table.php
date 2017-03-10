<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mn_users', function (Blueprint $table) {
            //$table->increments('id');
            $table->uuid('uuid');
            $table->primary('uuid');
            $table->uuid('company_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', ['SYSTEM','CLIENT','MEMBER'])->default('MEMBER')->comment('SYSTEM: la tk qtri cao nhat, MEMBER: la tk binh thuong, CLIENT: la tk chinh cua company khi dky.');
            $table->string('avatar')->nullable();
            $table->enum('status', ['ACTIVE','INACTIVE'])->default('INACTIVE');
            $table->uuid('group_id');
            $table->rememberToken();
            $table->timestamps();

            // foreign key
            $table->foreign('company_id')->references('uuid')->on('mn_companies');
            $table->foreign('group_id')->references('uuid')->on('mn_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mn_users');
    }
}
