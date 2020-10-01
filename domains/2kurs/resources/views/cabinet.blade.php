@extends('layout')

@section('title_text')
    Личный кабинет
@endsection

@section('main_content')
    <h1>Вход в личный кабинет</h1>
<form method="post" action="/cabinet/lk">
    @csrf
    <input type="email" name="email" placeholder="Введите почту" class="form-control"> <br>
    <input type="password" name="password" placeholder="Введите пароль" class="form-control"> <br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
