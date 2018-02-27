<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("users.index2", ['user' => $user]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("users.index", ['user' => $user]);
    }

    public function renting()
    {
        $user = Auth::user();
        $products = array();
        $reservations = $user->reservations;
        foreach ($reservations as $reservation) {
            $products[$reservation->product_id] = $reservation->product;
        }
        return view("users.renting", compact('user', 'products', 'reservations'));
    }

    public function listing()
    {
        $user = Auth::user();
        return view("users.listing", ['user' => $user]);
    }
}
