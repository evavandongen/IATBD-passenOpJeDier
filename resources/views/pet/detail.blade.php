@section('title')
    {{"Passen op je Dier | $pet->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="petDetail__wrapper">
        @include('user.components.navbar')

        <section class="petDetail">

            <a class="goBack" href="/dashboard">
                <span class="material-icons">
                    arrow_back
                </span>
                Back to home 
            </a>
            


            <section class="petDetail__card">

                <figure class="petDetail__image">
                    <img src="{{$pet->image}}" alt="pet image">
                </figure>

                <section class="petDetail__text">
                    <h2>{{$pet->name}}</h2>

                    <section class="petDetail__text-type" >
                        <span class="material-icons u-noselect">
                            pets
                        </span>
                        <p>{{$pet->type}}</p>
                    </section>
                    <section class="petDetail__text-owner" >
                        @foreach ($users as $user)
                            @if ($user->id == $pet->ownerId)
                                @if ($user->id != $thisuser->id)
                                    <a href="/profile/{{$user->id}}">
                                        <span class="material-icons u-noselect">
                                            person
                                        </span>
                                    
                                        <p>{{$user->name}}</p>
                                    </a>
                                @else
                                        <span class="material-icons u-noselect">
                                            person
                                        </span>
                                    
                                        <p>{{$user->name}}</p>
                                @endif

                            @endif
                        @endforeach
                    </section>

                    <h3>About</h3>
                    <section class="petDetail__text-description">
                        <p>{{$pet->description}}</p>
                    </section>

                    <h3>Sitter details</h3>

                    <section class="petDetail__text-dates">
                        <span class="material-icons u-noselect">
                            event
                        </span>
                        <p>from {{date("d/m/y", strtotime($pet->startDate))}} till {{date("d/m/y", strtotime($pet->endDate))}}</p>
                    </section>

                    <section class="petDetail__text-rate" >
                        <span class="material-icons u-noselect">
                            euro
                        </span>
                        <p>{{$pet->hourlyRate}} per day</p>
                    </section>

                    @if ($pet->sitterId == null && $thisuser->id != $pet->ownerId)
                        <form action="/pet/request/{{$pet->id}}" method="POST">
                            @method('patch')
                            @csrf
                            <button type="submit" class="btn petDetail__btn">
                                I want to take care of this pet
                            </button>
                        </form>
                    @endif

                    @if ($pet->sitterId == null && $pet->ownerId == $thisuser->id)
                        <a class="btn petDetail__btn" href="/pet/delete/{{$pet->id}} "> Delete this pet</a>
                    @endif

                    @if ($pet->sitterId != null && $pet->ownerId != $thisuser->id)
                        <form action="/pet/home/{{$pet->id}}" method="POST">
                            @method('patch')
                            @csrf
                            <button type="submit" class="btn petDetail__btn">
                                This pet is back home
                            </button>
                        </form>
                    @endif
                </section>

            </section>


        </section>
        
    </main>
@endsection