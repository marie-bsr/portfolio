<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('date')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('titre');
            $table->text('contenu');
            $table->text('extrait')->nullable();
            $table->text('image_url')->nullable();
            $table->softDeletes()->nullable();// création d'une corbeille pour éviter une suppression définitive

            //si on delete un user, on delete aussi ses articles
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
