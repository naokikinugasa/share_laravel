<?php

namespace App\Http\Controllers;

use App\Product;
use App\Reservated_day;
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
        $reservatedDay = new Reservated_day();
        $reservatedDay->product_id = $id;
        $reservatedDay->date = $reservedDay;
        $reservatedDay->user_id = $user->id;
        $reservatedDay->save();
        endforeach;
        //TODO:予約不可能機能をつける時に分離する
        $reservation = new Reservation();
        $reservation->product_id = $id;
        $reservation->user_id = $user->id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->price = $request->price;
        $reservation->save();


        $title = '【予約確定】Shareの予約が確定しました。';
        $text = '';
        Mail::to('nktng117@gmail.com')->send(new RentSent($title, $text));

        return view('thanksRent', compact('user'));
    }


}
