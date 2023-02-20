@extends('layout')
@section('title')
   Авторизация
@endsection
@section('content')
    <body class="text-center" >
    <div class="container">
        <form method="post" action="/auth/check" class="form-signin">
@csrf
            <h1 class="h3 mb-3 font-weight-normal">Вход</h1><br>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus=""><br>
            <input type="password" name='password' id="inputPassword" class="form-control" placeholder=Пароль required=""><br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

        </form></div>
    </body>


@endsection;
