@extends('layout')
@section('title')
    Book Box
@endsection
@section('content')


    <h2>Результаты поиска:</h2><br>

    @if($book)

    @foreach ($book as $books)

        <div class="alert" style="border-color: cadetblue">
            <h4> {{ $books->name}}</h4>
            <p>{{$books->fullname}}</p>
            <p>{{$books->style}}</p>
        </div>
    @endforeach
    @endif

    @if(!$book)
        <h5>Книга не найдена</h5><br>
    @endif

    <a class="btn btn-outline-primary" href="/home">Назад</a><br><br>
@endsection
