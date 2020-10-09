<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_fields', function (Blueprint $table) {
            $table->foreignId('post_id')
                  ->primary()
                  ->constrained('posts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('interview');
            $table->date('expired');
            $table->unsignedDecimal('income', 15, 2);
            $table->string('work_place');
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
        Schema::dropIfExists('post_fields');
    }
}
