<?php

// database/migrations/yyyy_mm_dd_create_catagory_post_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatagoryPostTable extends Migration
{
    public function up()
    {
        Schema::create('catagory_post', function (Blueprint $table) {
            $table->unsignedBigInteger('catagory_id');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();

            $table->primary(['catagory_id', 'post_id']);

            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('catagory_post');
    }
}
