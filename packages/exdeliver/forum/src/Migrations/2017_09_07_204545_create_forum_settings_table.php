<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('forum_settings', function(Blueprint $column)
        {
            $column->increments('id')->unsigned();
            $column->string('title');
            $column->string('sub_title');
            $column->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('forum_settings');
    }
}