@section('title')
    {{"Passen op je Dier | Admin" }}
@endsection

@extends('baseview')
@section('content')

    <main class="admin__wrapper">
        @include('user.components.navbar')

        <article class="admin">

            <h2>All users</h2>

            <section class="admin__list-users">
                
                @foreach ($users as $user)
                    <section class="admin__user">
                        <h3>{{$user->name}}</h3>
                        <p>ID: {{$user->id}}</p>
                        <p>{{$user->email}}</p>
                        <button class="btn admin__block-btn">Block user</button>
                    </section>
                @endforeach
                
            </section>
        </article>

    </main>
@endsection