@extends('layouts.defalut')

@section('title', '商品詳細')
@section('content')
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery">
                    {{--<div class="gallery-wrapper">--}}
                        {{--<div class="gallery-item active"><a href="/img/shop/single/01.jpg" data-hash="one" data-size="1000x667"></a></div>--}}
                    {{--</div>--}}
                    <div class="product-carousel owl-carousel" style="height: 354px;">
                        <div data-hash="one" style="height: 354px;"><img src="{{$product->pic_thum()}}" style="width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6">
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span>
                <h2 class="padding-top-1x text-normal">{{$product->title}}</h2>
                <hr class="margin-bottom-1x">
                <span class="h2 d-block">¥ {{$product->price_day}}/日</span>
                @if(isset($product->price_week))
                <span class="h2 d-block">¥ {{$product->price_week}}/週</span>
                @endif
                @if(isset($product->price_week))
                <span class="h2 d-block">¥ {{$product->price_month}}/月</span>
                @endif
                <p>場所：<a href="http://www.u-space.com/shop-search/detail.php?shop_id=20207">{{$product->place}}</a></p>
                <p>詳細：<br>{{$product->honbun}}</p>

                <div class="padding-bottom-1x mb-2"><span class="text-medium">Categories:&nbsp;{{Helper::getCategoryName($product->category_id)}}</span></div>

                <button class="btn btn-owner" style="margin-right: 0px; padding: 0px 0px;">
                    <div class="owner-ava">
                        <a href="/home">
                            {{--TODO:userページにリンク--}}
                        <img src="{{$product->getOwnerAvatar()}}" style="display: block;
    width: 44px;
    padding: 3px;
    border: 1px solid #e1e7ec;
    border-radius: 50%;">
                        </a>
                    </div>
                </button>
                <span class="text-medium">出品者は{{$product->getOwnerName()}}さん</span>

                <div class="_16tcko6">
                <p style="text-align: center; margin-top: 16px; margin-bottom: 8px;">予約可能日</p>
                <table class="cal">
                    <thead>
                    <tr>
                        <th><a href="/products/{{$product->id}}?t={{$calendar->prev}}">&laquo;</a></th>
                        <th colspan="5">{{$calendar->yearMonth}}</th>
                        <th><a href="/products/{{$product->id}}?t={{$calendar->next}}">&raquo;</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Sun</td>
                        <td>Mon</td>
                        <td>Tue</td>
                        <td>Wed</td>
                        <td>Thu</td>
                        <td>Fri</td>
                        <td>Sat</td>
                    </tr>
                    {{ $calendar->show($reservedDates) }}

                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="7" style="color: white">Today</th>
                    </tr>
                    </tfoot>
                </table>

                {{--<hr class="mb-3">--}}
                <p style="margin-top: 16px; margin-bottom: 4px;">日付</p>
                <form class="checkValidation" action='/reservation/{{$product->id}}' method="GET">
                    <input type="text" class="datepicker" name="start_date" placeholder="2018/2/5">～
                    <input type="text" class="datepicker" name="end_date" placeholder="2018/2/5">
                    {{--TODO:今日の日付に--}}
                    {{--TODO:予約可能日のみ表示--}}
                    <input class="btn btn-primary" type="submit" value="レンタルする">
                    <br>
                    <div style="color: red;">
                    @if($errors->has('start_date'))
                        {{$errors->first('start_date')}}
                        <br>
                    @endif
                    @if($errors->has('end_date'))
                        {{$errors->first('end_date')}}
                    @endif
                    </div>
                    <p>*まだ確定はしません。</p>
                </form>

                <div class="d-flex flex-wrap justify-content-between">
                    <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                        <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                    </div>
                    {{--<div class="sp-buttons mt-2 mb-2">--}}
                        {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>--}}
                        {{--<button class="btn btn-primary" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> Add to Cart</button>--}}
                    {{--</div>--}}
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style type="text/css">
        ._16tcko6 {
            padding-left: 24px !important;
            padding-right: 24px !important;
            margin: 0px !important;
            border: 1px solid #e4e4e4 !important;
            background-color: #ffffff !important;
        }
        .cal {
            width: 100%;
            border: 1px solid #e4e4e4;
        }
    </style>
@endsection