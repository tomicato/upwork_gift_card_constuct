<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_cards', function (Blueprint $table) {
            $table->id();
            $table->string('template_url')->nullable();
            $table->string('image_title')->nullable();

            $table->string('el_text_font_name')->nullable();
            $table->string('el_text_font_size')->nullable();
            $table->string('el_text_font_color')->nullable();
            $table->string('el_text_position_x')->nullable();
            $table->string('el_text_position_y')->nullable();

            $table->string('am_text_font_name')->nullable();
            $table->string('am_text_font_size')->nullable();
            $table->string('am_text_font_color')->nullable();
            $table->string('am_text_position_x')->nullable();
            $table->string('am_text_position_y')->nullable();

            $table->string('code_text_font_name')->nullable();
            $table->string('code_text_font_size')->nullable();
            $table->string('code_text_font_color')->nullable();
            $table->string('code_text_position_x')->nullable();
            $table->string('code_text_position_y')->nullable();
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
        Schema::dropIfExists('gift_cards');
    }
}
