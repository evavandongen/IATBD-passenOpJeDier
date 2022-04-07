@section('title')
    {{"Passen op je Dier | Home"}}
@endsection

@extends('baseview')
@section('content')

<main class="index__wrapper">

    <article class="index">
        <figure class="index__logo">
            <img src="../img/logo.png" alt="logo">
        </figure>
        <header class="index__header">
            <h1>Passen op je Dier</h1>
        </header>
        <section class="index__text">
            <p>Vind de perfecte oppas voor jouw huisdier</p>
        </section>
        <section class="index__login-register">

            <a href="/login" class="btn index__login-btn"> Login
            </a>
            <a href="/register" class="btn index__register-btn"> Registreer
            </a>
        </section>
    </article>

</main>

@endsection