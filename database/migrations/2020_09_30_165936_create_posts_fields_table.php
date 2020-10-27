<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_fields', function (Blueprint $table) {
            $table->foreignId('post_id')
                  ->primary()
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('interview');
            $table->date('expired');
            $table->unsignedDecimal('income', 15, 2);
            $table->string('work_place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_fields');
    }
}
