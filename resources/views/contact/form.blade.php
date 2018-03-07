@extends('layouts.defalut')

@section('title', 'お問い合わせ')

@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{action('ContactController@confirm')}}" method="post">


        <input type="text" name="name" value="{{old('name')}}">

        <input type="text" name="email" value="{{old('email')}}">

        <textarea name="message">{{old('message')}}</textarea>

        <input type="submit" value="Confirm">
    </form>
@endsection
