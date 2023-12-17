<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userrole', function (Blueprint $table) {
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('roleID');

            $table->foreign('userID')->references('id')->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table->foreign('roleID')->references('id')->on('role')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userrole');
    }
};
