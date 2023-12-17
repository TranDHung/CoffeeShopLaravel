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
        Schema::create('rolepermission', function (Blueprint $table) {
            $table->unsignedBigInteger('roleID');
            $table->unsignedBigInteger('permissionID');

            $table->foreign('roleID')->references('id')->on('role')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table->foreign('permissionID')->references('id')->on('permission')
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
        Schema::dropIfExists('rolepermission');
    }
};
