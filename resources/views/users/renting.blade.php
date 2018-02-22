@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
    <div class="col-lg-8">
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <!-- Wishlist Table-->
        <div class="table-responsive wishlist-table margin-bottom-none">
            <table class="table">
                <thead>
                <tr>
                    <th>レンタル中</th>
                    <th class="text-center">返却日</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="product-item"><a class="product-thumb" href="/products/{{$product->id}}"><img src="{{$product->pic_thum()}}" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="shop-single.html">{{$product->title}}</a></h4>
                                    <div class="text-lg text-medium text-muted">{{$product->price}}</div>
                                    @php($i = 0)
                                    @foreach($product->reservations as $reservation)
                                        @if($i === 0)
                                            @php($start_date = $reservation->date)
                                        @elseif($i === (count($product->reservations) - 1))
                                            @php($end_date = $reservation->date)
                                        @endif
                                        @php($i++)
                                    @endforeach
                                    レンタル期間：
                                    {{$start_date}} ~ {{$end_date}}
                                    {{--<div>Availability:--}}
                                    {{--<div class="d-inline text-success">In Stock</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center" style="color: red;">{{$end_date}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <hr class="mb-4">
        {{--<div class="custom-control custom-checkbox">--}}
            {{--<input class="custom-control-input" type="checkbox" id="inform_me" checked>--}}
            {{--<label class="custom-control-label" for="inform_me">Inform me when item from my wishlist is available</label>--}}
        {{--</div>--}}
    </div>

@endsection