<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTabe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->bigIncrements('id');
            $table->string('age_group')->nullable();
            $table->string('amazon_product_url');
            $table->string('article_chapter_link')->nullable();
            $table->string('author');
            $table->string('book_image');
            $table->integer('book_image_width');
            $table->integer('book_image_height');
            $table->string('book_review_link')->nullable();
            $table->string('contributor');
            $table->string('contributor_note')->nullable();
            $table->dateTime('created_date');
            $table->string('description');
            $table->string('first_chapter_link')->nullable();
            $table->decimal('price');
            $table->string('primary_isbn10');
            $table->string('primary_isbn13');
            $table->string('book_uri');
            $table->string('publisher');
            $table->integer('rank');
            $table->integer('rank_last_week');
            $table->string('sunday_review_link')->nullable();
            $table->string('title');
            $table->dateTime('updated_date');
            $table->integer('weeks_on_list');
            $table-> unsignedBigInteger('list_id');
            $table->foreign('list_id')->references('list_id')->on('lists')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}
