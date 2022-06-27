<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("role")->after("email")->default("USER");
            $table->string("phone")->after("email")->nullable();
            $table->string("username")->after("email")->nullable();
            $table->text("token_fcm")->after("role")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("role");
            $table->dropColumn("phone");
            $table->dropColumn("username");
            $table->dropColumn("token_fcm");
        });
    }
}
