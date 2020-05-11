<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('novius_menu_items', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->default(0)->nullable();
            $table->unsignedBigInteger('lft')->nullable();
            $table->unsignedBigInteger('rgt')->nullable();
            $table->unsignedBigInteger('depth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('novius_menu_items', function (Blueprint $table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('lft');
            $table->dropColumn('rgt');
            $table->dropColumn('depth');
        });
    }
}
