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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->string('apellido',100);
            $table->string('ciudad',100);
            $table->string('barrio',100);
            $table->string('postal',100);
            $table->string('direccion',100);
            $table->year('nacimiento');
            $table->string('alias',100);
            $table->string('telefono',50);
            $table->text('avatar');
            $table->enum('role',['admin','user'])->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
