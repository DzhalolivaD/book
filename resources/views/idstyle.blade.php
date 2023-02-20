@extends('layout')
@section('title')
    Book Box
@endsection
@section('content')

    <a class="btn btn-outline-primary" href="/style">Назад</a><br><br>
    @foreach($style as $st)
        <h4>{{$st->name}}: </h4><br>
    @endforeach

    @foreach($book as $books)

        <div class="alert" style="border-color: cadetblue"> {{$books -> bookname}} <br>
            <p>{{$books->fullname}}</p>
        </div>
    @endforeach
    {{$book->links()}}

@endsection
