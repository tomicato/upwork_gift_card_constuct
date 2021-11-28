<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GiftCardResource extends JsonResource
{

    public function toArray($request)
    {
       // return parent::toArray($request);
        return [
            'id' => $this->id,
            'template_url' => $this->template_url,
            'image_title' => $this->image_title,

            'el_text_font_name' => $this->el_text_font_name,
            'el_text_font_size' => $this->el_text_font_size,
            'el_text_font_color' => $this->el_text_font_color,
            'el_text_position_x' => $this->el_text_position_x,
            'el_text_position_y' => $this->el_text_position_y,

            'am_text_font_name' => $this->am_text_font_name,
            'am_text_font_size' => $this->am_text_font_size,
            'am_text_font_color' => $this->am_text_font_color,
            'am_text_position_x' => $this->am_text_position_x,
            'am_text_position_y' => $this->am_text_position_y,

            'code_text_font_name' => $this->code_text_font_name,
            'code_text_font_size' => $this->code_text_font_size,
            'code_text_font_color' => $this->code_text_font_color,
            'code_text_position_x' => $this->code_text_position_x,
            'code_text_position_y' => $this->code_text_position_y,


            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
