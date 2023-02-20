@extends('layout')
@section('title')
    Book Box
@endsection
@section('content')

    <a class="p-2 text-dark" style="font-size: 24px" href="/home">Все книги (@foreach ($count as $counts)
            {{ $counts->summa}}
        @endforeach)</a>|<a class="p-2 text-dark" style="font-size: 24px" href="/author">Список авторов (@foreach ($cauthor as $cauthors)
            {{ $cauthors->sumauthor}}
        @endforeach)</a>|<a class="p-2 text-dark" style="font-size: 24px" href="/style">Список жанров
    </a> <br><br>

    @foreach ($author as $authors)

        <div class="alert" style="border-color: cadetblue">
            <a style="font-size: 24px" class="p-2 text-dark" href="{{route('idauthor',$authors -> id_author)}}" > {{ $authors->fullname}}</a>
            <p>Всего книг у автора: {{$authors->sumbook}}</p>
        </div>
    @endforeach
    <div>
        {{$author->links()}}
    </div><br>

@endsection
