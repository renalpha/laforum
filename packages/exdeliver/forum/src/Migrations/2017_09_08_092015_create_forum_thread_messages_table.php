<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumThreadMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('forum_thread_messages', function(Blueprint $column)
        {
            $column->increments('id')->unsigned();
            $column->integer('category_id')->index();
            $column->integer('forum_id')->index();
            $column->integer('parent_id')->index();
            $column->integer('thread_id')->index();
            $column->integer('user_id')->index();
            $column->string('title')->nullable();
            $column->text('message',4294967295); //longtext for summernote supported images
            $column->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('forum_thread_messages');
    }
}