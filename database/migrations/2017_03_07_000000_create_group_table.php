<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mn_group', function (Blueprint $table) {
            //$table->increments('id');
            $table->uuid('uuid');
            $table->primary('uuid');
            $table->string('name');
            $table->string('description')->nullable();
            $table->enum('status', ['ACTIVE','INACTIVE'])->default('ACTIVE');
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
        Schema::dropIfExists('mn_group');
    }
}
