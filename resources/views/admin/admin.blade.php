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

                        @if ($user->id != $thisuser->id)
                            @if ($user->blocked)
                                <form action="/admin/unblock/{{$user->id}}" method="POST">
                                    @method('patch')
                                    @csrf
                                    <button type="submit" class="btn admin__block-btn">
                                        Unblock user
                                    </button>
                                </form>
                            @else
                                <form action="/admin/block/{{$user->id}}" method="POST">
                                    @method('patch')
                                    @csrf
                                    <button type="submit" class="btn admin__block-btn">
                                        Block user
                                    </button>
                                </form>
                            @endif
                        @endif

                    </section>
                @endforeach
                
            </section>
        </article>

    </main>
@endsection