<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    use HasFactory;

   // protected $guarded = [];
    protected $fillable = [
        'template_url',
        'image_title',
        'el_text_font_name',
        'el_text_font_size',
        'el_text_font_color',
        'el_text_position_x',
        'el_text_position_y',
        'am_text_font_name',
        'am_text_font_size',
        'am_text_font_color',
        'am_text_position_x',
        'am_text_position_y',
        'code_text_font_name',
        'code_text_font_size',
        'code_text_font_color',
        'code_text_position_x',
        'code_text_position_y'];
}
