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

    @foreach ($style as $styles)

        <div class="alert" style="border-color: cadetblue">
            <a style="font-size: 24px" class="p-2 text-dark" href="{{route('idstyle',$styles -> id_style)}}" > {{ $styles->name}}</a>
        </div><br>
    @endforeach
    <div>
        {{$style->links()}}
    </div><br>

@endsection
