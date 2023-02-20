@extends('layout')
@section('title')
    Book Box
@endsection
@section('content')

    <form class="d-flex" action="/search" method="get" >
        @csrf
        <input class="form-control me-2" type="text" required="" name="ids" placeholder="Искать книгу по ID" aria-label="Search">

        <button class="btn btn-outline-success" type="submit">Поиск</button>
    </form><br>


    <a class="p-2 text-dark" style="font-size: 24px" href="/home">Все книги (@foreach ($count as $counts)
            {{ $counts->summa}}
        @endforeach)</a>|<a class="p-2 text-dark" style="font-size: 24px" href="/author">Список авторов (@foreach ($cauthor as $cauthors)
            {{ $cauthors->sumauthor}}
        @endforeach)</a>|<a class="p-2 text-dark" style="font-size: 24px" href="/style">Список жанров
    </a> <br>

    <br>

    @foreach ($book as $books)
        <div class="alert" style="border-color: cadetblue">
           <h4> {{ $books->name}}</h4>
            <p>{{$books->author}}</p>
            <p>{{$books->style}}</p>
        </div>
    @endforeach
    <div>
        {{$book->links()}}
    </div><br>
 @endsection

