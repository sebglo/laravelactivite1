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
            $table->unsignedBigInteger('post_id');//user_id//penser a modifier pour la suite
            $table->date('post_date');
            $table->longText('post_content');
            $table->text('post_title');
            $table->string('post_status',20);
            $table->string('post_name',200);//penser a masquer pour la suite 
            $table->string('post_type',20);
            $table->string('post_category',200);
            $table->timestamps();
            //$table->foreign('post_id')//user_id //penser a modifier pour la suite
            //->references('id')//penser a modifier pour la suite
            //->on('users')//penser a modifier pour la suite
            //->onDelete('cascade');//penser a modifier pour la suite
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
