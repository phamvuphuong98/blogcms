<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('banner')->nullable();
            $table->text('product_photos')->nullable();
            $table->text('a_contents')->nullable();
            $table->text('a_content_longs')->nullable();
            $table->text('brand_stories')->nullable();
            $table->text('brand_story_longs')->nullable();
            $table->text('videos')->nullable();
            $table->text('social_post_designs')->nullable();
            $table->text('packging_designs')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
};
