
@extends('layouts.defalut')

@section('title', '使い方')
@section('content')
    <!-- Page Content-->
    <div class="text-center">
        <p id="button1" class="btn btn-primary margin-top-none">借りる人</p>
        <p id="button2" class="btn btn-outline-primary margin-top-none">貸す人</>
    </div>
    <br><br><br>
    <div class="container padding-bottom-2x mb-2" id="howto-1">
        <div class="row align-items-center padding-bottom-2x">
            <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/projector3.jpg" alt="Online Shopping"></div>
            <div class="col-md-7 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>1、商品を探す</h2>
                <p>レンタルしたい商品を商品一覧から探します。</p><a class="text-medium text-decoration-none" href="/products">商品を探す&nbsp;<i class="icon-arrow-right"></i></a>
            </div>
        </div>
        <hr>
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
            <div class="col-md-5 order-md-2"><img class="d-block w-270 m-auto" src="img/calendar.jpg" alt="Delivery"></div>
            <div class="col-md-7 order-md-1 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>2、予約する</h2>
                <p>レンタル期間を選択して予約しましょう。</p>
            </div>
        </div>
        <hr>
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
            <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/souko.jpg" alt="Mobile App"></div>
            <div class="col-md-7 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>３、倉庫に取りに行く</h2>
                <p class="mb-4">予約完了後、倉庫の部屋番号、鍵番号がメールで送られてきます。レンタル日にモノが置いてある倉庫に行き、鍵を開けてレンタルしましょう。
                </p><p style="color: red;">レンタル料は倉庫内の「レンタル料金box」に入れてください。</p>
            </div>
        </div>
        <hr>
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
            <div class="col-md-5 order-md-2"><img class="d-block w-270 m-auto" src="img/features/02.jpg" alt="Delivery"></div>
            <div class="col-md-7 order-md-1 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>４、返却する</h2>
                <p>返却期限日までにレンタルした倉庫に返しに行きましょう。借りた時と同じ場所に返却してください。</p>
            </div>
        </div>
        <hr>

    </div>


    <div class="container padding-bottom-2x mb-2" id="howto-2">
        <div class="row align-items-center padding-bottom-2x">
            <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/syuppin.jpg" alt="Online Shopping"></div>
            <div class="col-md-7 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>1、出品する</h2>
                <p>商品名、説明、画像、場所、価格を入力し、普段使ってないものを出品しましょう。出品料はもちろん無料です。</p><a class="text-medium text-decoration-none" href="/products">商品を出品する&nbsp;<i class="icon-arrow-right"></i></a>
            </div>
        </div>
        <hr>
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
            <div class="col-md-5 order-md-2"><img class="d-block w-270 m-auto" src="img/souko.jpg" alt="Delivery"></div>
            <div class="col-md-7 order-md-1 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>2、倉庫に持っていく</h2>
                <p>出品完了後、指定した場所の倉庫番号と鍵番号がメールで送られてきます。確認後、倉庫に出品商品を置きに行きましょう。</p>
            </div>
        </div>
        <hr>

    </div>

    <script>
        if ($j('#howto-2').is(':visible')) {
            $j('#howto-2').hide();
        }
        $j('#button1').on('click', function() {
            $j('#button1').addClass('btn-primary');
            $j('#button1').removeClass('btn-outline-primary');
            $j('#button2').addClass('btn-outline-primary');
            $j('#button2').removeClass('btn-primary');
            $j('#howto-2').hide();
            $j('#howto-1').show();
        });
        $j('#button2').on('click', function() {
            $j('#button2').addClass('btn-primary');
            $j('#button2').removeClass('btn-outline-primary');
            $j('#button1').addClass('btn-outline-primary');
            $j('#button1').removeClass('btn-primary');
            $j('#howto-1').hide();
            $j('#howto-2').show();
        });
    </script>
@endsection