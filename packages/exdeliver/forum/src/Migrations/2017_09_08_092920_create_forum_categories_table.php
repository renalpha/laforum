<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('forum_categories', function(Blueprint $column)
        {
            $column->increments('id')->unsigned();
            $column->integer('parent_id')->index();
            $column->integer('user_id')->index();
            $column->string('title')->nullable();
            $column->text('description',65535);
            $column->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('forum_categories');
    }
}