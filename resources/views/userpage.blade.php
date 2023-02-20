@extends('layout')
@section('title')
    Мой аккаунт
@endsection
@section('content')
    <body class="text-center" >
    <div class="container">
        <form method="post" action="submit" class="form-signin">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Мой аккаунт</h1><br>
            <input type='text' name="lastname" id="lastname" class="form-control" placeholder="Фамилия" required="" autofocus=""><br>
            <input type='text' name="name" id="name" class="form-control" placeholder="Имя" required="" autofocus=""><br>
            <input type='text' name="middlename" id="middlename" class="form-control" placeholder="Отчетсво/среднее имя" required="" autofocus=""><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Сохранить</button>

        </form></div>
    </body>


@endsection;
