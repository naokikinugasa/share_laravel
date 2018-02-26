<?php

namespace App\Http\Controllers;

use App\Product;
use App\Reservation;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentSent;

class ReservationsController extends Controller
{

    public function show(ProductsRequest $request, $id)
    {

        $user = Auth::user();
        $query = $request->query();
        $product = Product::findOrFail($id);
        return view('reservations.show2', ["product" => $product, "query" => $query, "user" => $user]);
    }

    public function store(Request $request, $id)
    {
        $user = Auth::user();
        //TODO:同じ予約がないかチェック
        foreach ($request->day as $reservedDay) :
        $reservation = new Reservation();
        $reservation->product_id = $id;
        $reservation->date = $reservedDay;
        $reservation->user_id = $user->id;
        $reservation->save();
        endforeach;


        $title = '【予約確定】Shareの予約が確定しました。';
        $text = '倉庫番号：  17
        鍵番号：    7572';
        Mail::to('nktng117@gmail.com')->send(new RentSent($title, $text));

        return view('thanksRent', compact('user'));
    }


}
