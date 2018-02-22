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


        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします。';
        Mail::to('s1410568@u.tsukuba.ac.jp')->send(new RentSent($name, $text));

        return view('thanksRent', compact('user'));
    }


}
