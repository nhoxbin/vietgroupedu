<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')
                  ->nullable()
                  ->constrained('categories')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->boolean('type')->comment('0: bài viết, 1: đơn hàng');
            $table->string('language', 10);
            $table->string('title');
            $table->string('picture')->nullable();
            $table->string('slug')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->unique(['category_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
