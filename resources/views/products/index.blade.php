@extends('layouts.defalut')

@section('title', '商品一覧')

@section('content')

    <div id="container">

        <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
            <form class="form-inline" action="{{url('/products')}}" method="GET">
                <div class="form-group">
                    <input type="text" name="keyword" value="@if(isset($keyword)) {{$keyword}} @endif" class="form-control" placeholder="名前を入力してください">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>

        <div id="product">
            <h2>商品一覧</h2>
            <ul>
                @foreach ($products as $product)
                <a href="/products/{{ $product->id }}">
                    <div class="topNaviColumn2">
                        <div class="topNaviPhoto2"><img src="{{$product->pic_thum()}}" alt="" /></div>
                        <p style="padding:0 5%;"class="topNaviDetail2">
                            {{$product->title}}
                        </p><br><p class="topNaviDetailPrice">{{$product->price}}</p>
                    </div><!-- /.topNaviColumn -->
                </a>
                @endforeach
            </ul>

            {{ $products->links() }}

        </div>

    </div>
@endsection
