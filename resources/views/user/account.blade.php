@section('title')
    {{"Passen op je Dier | $thisuser->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="account__wrapper">
        @include('user.components.navbar')

        <section class="account">
            
            <section class="account__text">
                <h2>Hi, {{$thisuser->name}}</h2>
            </section>

            <section class="account__requests">
                <h3>Requests</h3>
                <section class="account__list-requests">
                    @foreach ($pets as $pet)
                        @if ($pet->ownerId == $thisuser->id && $pet->request)
                                @include('user.components.request-card')
                        @endif
                    @endforeach
                </section>
            </section>

            <section class="account__lists">
                <section class="account__list-owned">
                    <h3>Owned pets</h3>
                    <section class="account__list">
                        @foreach ($pets as $pet)
                            @if ($pet->ownerId == $thisuser->id)
                                <a href="/pets/{{$pet->id}}">
                                    @include('user.components.pet-card')
                                </a>
                            @endif
                        @endforeach
                    </section>
                    <a class="btn account__addPet" href="/pet/create">Add new pet</a>
                </section>

                <section class="account__list-sitter">
                    <h3>Sitter pets</h3>
                    <section class="account__list">
                        @foreach ($pets as $pet)
                            @if ($pet->sitterId == $thisuser->id && !$pet->request)
                                <a href="/pets/{{$pet->id}}">
                                    @include('user.components.pet-card')
                                </a>
                            @endif
                        @endforeach
                    </section>
                </section>
            </section>
            
        </section>
        

    </main>
@endsection