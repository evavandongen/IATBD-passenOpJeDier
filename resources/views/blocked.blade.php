@section('title')
    {{"Passen op je Dier | $thisuser->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="blocked__wrapper">
        @include('user.components.navbar')

        <section class="blocked">

            <figure class="blocked__image">
                <img src="../img/logo.png" alt="logo">
            </figure>

            <section class="blocked__text">
                <h2>You have been blocked</h2>
                <p>Get in contact with an admin to get unblocked</p>
            </section>
            
        </section>
        

    </main>
@endsection