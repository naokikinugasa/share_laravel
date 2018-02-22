
@extends('layouts.defalut')


@section('content')
<!-- Page Title-->
<!-- Page Content-->
<!-- Main Slider-->
<section class="hero-slider" style="background-image: url(img/soukogazou.jpg); height: 300px;">
    {{--<div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">--}}
        {{----}}
    {{--</div>--}}
</section>
<!-- Top Categories-->
<section class="container padding-top-3x">
    <h3 class="text-center mb-30">Share(シェア)は近所の人とモノをレンタルしあうサービスです</h3>
    <div class="text-center"><a class="btn btn-primary margin-top-none" href="/howto">使い方を見る</a></div>
    <br><br><br>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="text-center">
                <h4 class="card-title">1.使ってみたいけど高くて買えない</h4>
                <div class="inner" style="height: 210px;">
                    <img src="img/PSVR.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">
                </div>
                <div class="card-body text-center" style="height: 210px; padding: 70px 90px;">
                    <img src="img/yazirusi.png" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="text-center">
                <h4 class="card-title">2.数回しか使わないので元が取れない</h4>
                <div class="inner" style="height: 210px;">
                    <img src="img/kawanakya.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">
                </div>
                <div class="card-body text-center" style="height: 210px; padding: 70px 90px;">
                    <img src="img/yazirusi.png" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="text-center">
                <h4 class="card-title">3.部屋が狭いので置く場所がない</h4>
                <div class="inner" style="height: 210px;">
                    <img src="img/heya.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">
                </div>
                <div class="card-body text-center" style="height: 210px; padding: 70px 90px;">
                    <img src="img/yazirusi.png" style="width: 100%;">
                </div>
            </div>
        </div>
        {{--<div class="col-md-4 col-sm-6">--}}
        {{--<div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">--}}
        {{--<div class="inner">--}}
        {{--<div class="main-img"><img src="img/shop/categories/07.jpg" alt="Category"></div>--}}
        {{--<div class="thumblist"><img src="img/shop/categories/08.jpg" alt="Category"><img src="img/shop/categories/09.jpg" alt="Category"></div>--}}
        {{--</div></a>--}}
        {{--<div class="card-body text-center">--}}
        {{--<h4 class="card-title">Bags</h4>--}}
        {{--<p class="text-muted">Starting from $27.00</p><a class="btn btn-primary btn-sm" href="shop-grid-ls.html">View Products</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6" style="height: 400px; width: 100%; padding: 0px 30px;">
            <div class="inner" style="height: 50%;">
                <img src="img/projector3.jpg" alt="Category" style="height: 100%; width: 100%;">
            </div>
            <div class="card-body text-center">
                <h4 class="card-title">高くて買えなかったものをレンタルして使おう。</h4>
                <a class="btn btn-primary" href="{{url('/products')}}">商品を見る</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="height: 400px;">
            <div class="inner" style="height: 50%;">
                <img src="img/placeit.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">
            </div>
            <div class="card-body text-center">
                <h4 class="card-title">使ってないものをシェアしてお小遣いを稼ごう。</h4>
                <a class="btn btn-primary" href="{{url('/products/create')}}">出品する</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6" style="height: 400px;">
            <div class="inner" style="height: 50%;">
                <img src="img/heya2.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">
            </div>
            <div class="card-body text-center">
                <h4 class="card-title">必要最低限のモノで快適に過ごそう。</h4>
                <a class="btn btn-primary" href="{{url('/howto')}}">使い方を見る
                </a>
            </div>
        </div>
    </div>
    {{--<div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="shop-categories.html">All Categories</a></div>--}}
</section>
<!-- Promo #1-->

<!-- Featured Products Carousel-->
<section class="container padding-top-3x padding-bottom-3x">
    <h3 class="text-center mb-30">人気の商品</h3>
    <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        <!-- Product-->
        <div class="grid-item">
            <div class="product-card">
                <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/09.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
                <h4 class="product-price">
                    <del>$44.95</del>$34.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/03.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
                <h4 class="product-price">$155.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/12.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
                <h4 class="product-price">$49.50</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/11.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
                <h4 class="product-price">$90.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/04.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
                <h4 class="product-price">$47.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Product-->
        <div class="grid-item">
            <div class="product-card">
                <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/01.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
                <h4 class="product-price">
                    <del>$99.99</del>$49.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>


{{--<!-- Popular Brands-->--}}
{{--<section class="bg-faded padding-top-3x padding-bottom-3x">--}}
{{--<div class="container">--}}
{{--<h3 class="text-center mb-30 pb-2">Popular Brands</h3>--}}
{{--<div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/07.png" alt="Dior"></div>--}}
{{--</div>--}}
{{--</section>--}}
<!-- Services-->
<section class="container padding-bottom-2x text-center">
    <h3 class="text-center mb-30">Shareの特徴</h3>
    <div class="row">
        {{--<div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/01.png" alt="Shipping">--}}
        {{--<h6>Free Worldwide Shipping</h6>--}}
        {{--<p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>--}}
        {{--</div>--}}
        <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/02.png" alt="Money Back">
            <h6>近所の人と気軽に貸し借り</h6>
            <p class="text-muted margin-bottom-none">人似合う必要がないので気軽に貸し借りできます</p>
        </div>
        <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/03.png" alt="Support">
            <h6>カスタマーサポート</h6>
            <p class="text-muted margin-bottom-none">ご不明な点はいつでもお問い合わせください</p>
        </div>
        <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/04.png" alt="Payment">
            <h6>出品はもちろん無料</h6>
            <p class="text-muted margin-bottom-none">その他、会員登録料・月会費・カード手数料は一切かかりません</p>
        </div>
    </div>
</section>
@endsection