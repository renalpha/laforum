<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('forum_threads', function(Blueprint $column)
        {
            $column->increments('id')->unsigned();
            $column->increments('category_id')->unsigned();
            $column->string('title');
            $column->string('sub_title')->nullable();
            $column->string('message',4294967295); //longtext for summernote supported images
            $column->integer('author_id')->index();
            $column->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('forum_threads');
    }
}