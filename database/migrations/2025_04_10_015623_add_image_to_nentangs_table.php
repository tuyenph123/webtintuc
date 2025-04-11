<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToNentangsTable extends Migration
{
    public function up()
    {
        Schema::table('nentangs', function (Blueprint $table) {
            $table->string('image')->after('name');
        });
    }

    public function down()
    {
        Schema::table('nentangs', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
