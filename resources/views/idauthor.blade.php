@extends('layout')
@section('title')
    Book Box
@endsection
@section('content')
    <a class="btn btn-outline-primary" href="/author">Назад</a><br><br>

    @foreach($author as $authors)

        <h4>{{$authors->fullname}}: </h4><br>
    @endforeach
@foreach($book as $books)
    <div class="alert" style="border-color: cadetblue"> {{$books -> bookname}} <br>
    <p>Жанр: {{$books->style}}</p></div>
@endforeach
@endsection

