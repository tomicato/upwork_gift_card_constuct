<?php

namespace App\Http\Controllers;

use App\Models\GiftCard;
use Illuminate\Http\Request;

class GiftCardController extends Controller
{

    public function index()
    {
        return view('frontend.gift-card.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        dd($request->all());
    }


    public function show(GiftCard $giftCard)
    {
        //
    }


    public function edit(GiftCard $giftCard)
    {
        //
    }


    public function update(Request $request, GiftCard $giftCard)
    {
        //
    }


    public function destroy(GiftCard $giftCard)
    {
        //
    }
}
