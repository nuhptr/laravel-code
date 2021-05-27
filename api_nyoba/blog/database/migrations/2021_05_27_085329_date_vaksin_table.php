<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DateVaksinTable extends Migration
{
    public function up()
    {
        Schema::create('datevaksin', function (Blueprint $table) {
            $table-> increments("id");
            $table-> integer("adminId")->unsigned();
            $table-> foreign("adminId")->references("id")->on("admins");
            $table-> date("tanggalBukaVaksin");
            $table-> timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('date_vaksin');
    }
}
