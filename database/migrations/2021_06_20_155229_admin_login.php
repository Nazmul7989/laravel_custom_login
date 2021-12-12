<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminLogin', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('email',200);
            $table->string('password',22);
            $table->string('created_at',200);
            $table->string('updated_at',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
