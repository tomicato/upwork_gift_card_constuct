<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GiftCardResource as GiftResource;
use App\Models\GiftCard;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class GiftCardController extends Controller
{
    public function store(Request $request)
    {
        $img = $request->image;
        $fileName = $img->getClientOriginalName();
        $img->move(public_path('uploads'), $fileName);
        $template_url = $request->root() . '/uploads/' . $fileName;

        $gift_cards = GiftCard::create($request->except(['image']));
        $gift_cards->fill([
            'template_url' => $template_url,
            'image_title' => $fileName,
        ]);
        $gift_cards->save();

        return new GiftResource($gift_cards);
    }
}
