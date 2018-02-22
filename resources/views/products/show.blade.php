@extends('layouts.defalut')

@section('title', '商品詳細')

@section('content')
<div id="container">
    <div id="product">
        <div class="topNaviColumn3">
            <div class="topNaviPhoto3"><img src="{{$product->pic_thum()}}" alt="" /></div>
            <h3 class="name">{{$product->title}}</h3>
            <h3 class="name">{{$product->price}}</h3>
            <!--いいね-->
            {{--TODO:いいね--}}
            <div class="syouhinsetumei">商品説明</div>
            <p style="padding: 20px; word-wrap:break-word;">{{$product->honbun}}</p>
        </div><!-- /.topNaviColumn -->
        <div class="syouhinsetumei">詳細</div>
        <table class="sample_03">
            <tbody>
            <tr>
                <th>カテゴリー</th>
                <td>{{$product->category}}</td>
            </tr>
            <tr>
                <th>受け渡し場所</th>
                <td>{{$product->place}}</td>
            </tr>
            <tr>
                <th>レンタル日数</th>
                <td>{{$product->days}}</td>
            </tr>
            <tr>
                <th>価格</th>
                <td>{{$product->price}}</td>
            </tr>
            <tr>
                <th>出品者</th>
                <td>{{$product->getOwnerName()}}</td>
                {{--//TODO:ユーザーリンク--}}
            </tr>
            </tbody>
        </table>



        <div class="syouhinsetumei">レンタル可能日</div>
        <form class="checkValidation" action='/reservation/{{$product->id}}' method="GET">
            <input type="text" class="datepicker" name="start_date" placeholder="2018/2/5">～
            <input type="text" class="datepicker" name="end_date" placeholder="2018/2/5">
            {{--TODO:今日の日付に--}}
            {{--TODO:予約可能日のみ表示--}}
            <input class="myButton" type="submit" value="レンタルする">
        </form>
            <table class="cal">
                <thead>
                <tr>
                    <th><a href="/products/{{$product->id}}&t={{$calendar->prev}}">&laquo;</a></th>
                    <th colspan="5">{{$calendar->yearMonth}}</th>
                    <th><a href="/products/{{$product->id}}&t={{$calendar->next}}">&raquo;</a></th>
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




    </div>
</div>
@endsection