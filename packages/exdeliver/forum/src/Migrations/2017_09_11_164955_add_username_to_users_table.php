<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function($table) {
            $table->text('username')->after('email');
        });
    }

    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('username');
        });
    }
}