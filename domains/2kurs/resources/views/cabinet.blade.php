@extends('layout')

@section('title_text')
    Личный кабинет
@endsection

@section('main_content')
    <h1>Вход в личный кабинет</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post" action="/cabinet/lk">
    @csrf
    <input type="email" name="email" placeholder="Введите почту" class="form-control"> <br>
    <input type="password" name="password" placeholder="Введите пароль" class="form-control"> <br>
    <button type="submit" class="log btn btn-success">Войти</button>
    <button type="submit" class="sign btn btn-dark">Регистрация</button>
</form>

    <h1>All users</h1>
    @foreach($user as $users)
        <div class="alert alert-warning">
            <h4>{{$users->id}}</h4>
            <h2>{{$users->email}}</h2>
            <h3>{{$users->password}}</h3>
        </div>
    @endforeach
@endsection
