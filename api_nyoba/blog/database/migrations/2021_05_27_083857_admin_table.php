<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminTable extends Migration
{
    public function up()
    {
         Schema::create('admins', function (Blueprint $table) {
            $table-> increments("id");
            $table-> string("name", 40);
            $table-> string("email", 20);
            $table-> string("hospital", 20);
            $table-> timestamps();
        });
    }

   
    public function down()
    {
         Schema::dropIfExists('admin');
    }
}
