@extends('layouts.defalut')

@section('title', 'お問い合わせ確認')

@section('content')

    <form action="{{action('ContactController@process')}}" method="post">

        {{$contact->name}}

        {{$contact->email}}

        {{$contact->message}}

        <input type="submit" value="Submit">

        @foreach($contact->getAttributes() as $key => $value)
            <input type="hidden" name="{{$key}}" value="{{$value}}">
        @endforeach
    </form>
@endsection