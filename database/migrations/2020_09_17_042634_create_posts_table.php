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
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedTinyInteger('post_type_id');
            $table->foreign('post_type_id')->references('id')->on('post_types')->onUpdate('cascade');
            $table->string('title');
            $table->string('picture');
            $table->string('slug')->unique();
            $table->unsignedDecimal('income', 2);
            $table->date('date_interview'); // interview = phỏng vấn
            $table->string('work_place');
            $table->text('description');
            $table->timestamps();
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
