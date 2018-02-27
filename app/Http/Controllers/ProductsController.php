<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Http\Requests\UploaderRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();

        $keyword = $request->input('site_search');
        #クエリ生成
        $query = Product::query();
        if (!empty($keyword)) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }

        $products = $query->paginate(16);

        return view('products.index2', ['products' => $products, 'user' => $user, 'keyword' => $keyword]);
    }

    public function show(Request $request, $id)
    {
        $t = $request->input('t');

        $user = Auth::user();
        $calendar = new Calendar($t);
        $product = Product::findOrFail($id);
        $reservedDates = array();
        foreach ($product->reservated_days as $reservation) {
            array_push($reservedDates, $reservation->date);
        }
        return view('products.show2', ['product' => $product, "calendar" => $calendar, 'user' => $user, 'reservedDates' => $reservedDates, 't' =>$t]);
    }

    public function category($id)
    {
        $user = Auth::user();
        $products = Product::where('category_id', $id)->paginate(16);
        return view('products.index2', ['products' => $products, 'user' => $user]);
    }

    public function create()
    {
        $user = Auth::user();
        $categories = [1,2,3];//TODO:定数化
        return view('products.create', compact('user', 'categories'));
    }

    public function confirm(UploaderRequest $req)
    {
        $user = Auth::user(); //TODO:これ全部にいる？

        $thum_name = uniqid("THUM_") . "." . $req->file('thum')->guessExtension(); // TMPファイル名
        $req->file('thum')->move(public_path() . "/img/product/tmp", $thum_name);
        $thum = "/img/product/tmp/".$thum_name;



        $data = $req->except('thum');
        $req->session()->put($data); // １）

        return view('products.confirm', compact("hash", "data", "user", "thum"));
    }

    public function store(Request $req)
    {
        $user = Auth::user();
        $data = session()->all();
        $product = new Product();
        $product->title = $data["title"];
        $product->honbun = $data["honbun"];
        $product->category_id = $data["category_id"];//TODO:category数値,文字列対応
        $product->place = $data["place"];
        $product->price_day = $data["price_day"];
        $product->price_week = $data["price_week"];
        $product->price_month = $data["price_month"];
        $product->user_id = $user->id;
        $product->save();

        //レコードを挿入したときのIDを取得
        $lastInsertedId = $product->id;

        // ディレクトリを作成
        if (!file_exists(public_path() . "/img/product/" . $lastInsertedId)) {
            mkdir(public_path() . "/img/product/" . $lastInsertedId, 0777);
        }

        // 一時保存から本番の格納場所へ移動
        rename(public_path() . $req->thum, public_path() . "/img/product/" . $lastInsertedId . "/thum." .pathinfo($req->thum, PATHINFO_EXTENSION));

        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/users/listing');
    }

}
