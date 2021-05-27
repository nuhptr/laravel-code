<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('userName', 10);
            $table -> string('email', 20);
            $table -> string('password', 10);
            $table -> string('tempatLahir', 20);
            $table -> date('tanggalLahir');
            $table -> enum('gender', ['laki-laki', 'perempuan']);
            $table -> string('NIK', 20);
            $table -> string('phone', 14);
            $table -> longText('alamat');
            $table -> timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
