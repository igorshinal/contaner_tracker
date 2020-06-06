<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullabe()->change();
            $table->string('last_name')->nullabe()->change();
            $table->string('username')->nullabe()->change();
            $table->integer('access')->default(0)->change();

        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->change();
            $table->string('last_name')->change();
            $table->string('username')->change();
            $table->integer('access')->change();
        });
    }
}
