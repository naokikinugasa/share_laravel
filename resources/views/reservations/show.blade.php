@extends('layouts.defalut')

@section('title', '商品詳細')

@section('content')
    <div id="container">
        <div id="product">
            <div class="topNaviColumn3">
                {{--TODO:画像--}}
                <h3 class="name">{{$product->title}}</h3>
            </div><!-- /.topNaviColumn -->
            <div class="syouhinsetumei">詳細</div>
            <table class="sample_03">
                <tbody>
                <tr>
                    <th>レンタル日数</th>
                    <td></td>
                    {{--TODO:日数・価格計算--}}
                </tr>
                <tr>
                    <th>価格</th>
                    <td></td>
                </tr>
                </tbody>
            </table>

            <table class="calConfirm">
                <form action='/reservation/reserve/{{$product->id}}' method='POST'>
                    <p>予約日: {{$query["start_date"]}} ~ {{$query["end_date"]}}
                        @php
                        $startDate = date($query["start_date"]);
                        $endDate = date($query["end_date"]);
                        $diff = (strtotime($endDate) - strtotime($startDate)) / ( 60 * 60 * 24);
                        for($i = 0; $i <= $diff; $i++) {
                            $reservedDays[] = date('Y-m-d', strtotime($startDate . '+' . $i . 'days'));
                        }
                        @endphp
                        @foreach ($reservedDays as $reservedDay)
                        <input type="hidden" name="day[]" value="{{$reservedDay}}">
                        @endforeach
                        {{--TODO:コントローラーでもループ回している。どちらかだけにしたい。--}}
                    <input type='submit' name='confirm2' value='確定する' class="myButtonConfirm" >

                </form>
            </table>
            <div id="yohaku">yohaku</div>
        </div>
    </div>
@endsection