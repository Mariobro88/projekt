<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_has_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('roles_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('role_has_users', function (Blueprint $table) {
            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('role_has_users', function (Blueprint $table) {
            $table->foreign('roles_id')
                ->references('id')
                ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_has_users');
    }
}
