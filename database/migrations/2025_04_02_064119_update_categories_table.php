<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn(['slug', 'parent_id', 'status']);
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug')->unique();
            $table->integer('parent_id')->nullable();
            $table->boolean('status')->default(1);
        });
    }
}
