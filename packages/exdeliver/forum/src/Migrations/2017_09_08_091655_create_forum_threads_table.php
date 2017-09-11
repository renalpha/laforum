<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('forum_threads', function(Blueprint $column)
        {
            $column->increments('id')->unsigned();
            $column->integer('category_id')->index();
            $column->string('title');
            $column->string('sub_title')->nullable();
            $column->text('message',4294967295); //longtext for summernote supported images
            $column->integer('user_id')->index();
            $column->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('forum_threads');
    }
}