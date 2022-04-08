@section('title')
    {{"Passen op je Dier | $pet->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="petDetail__wrapper">
        @include('user.components.navbar')

        <section class="petDetail">

            <a class="goBack" href="{{ url()->previous()}}">
                
                <span class="material-icons">
                    arrow_back
                </span>
                Go Back 
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
                        <span class="material-icons u-noselect">
                            person
                        </span>
                        @foreach ($users as $user)
                            @if ($user->id == $pet->ownerId)
                                <p>{{$user->name}}</a></p>
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
                        <button class="btn petDetail__sendRequest-btn">I want to take care of this pet</button>
                    @endif

                    @if ($pet->sitterId == null && $pet->ownerId == $thisuser->id)
                        <button class="btn petDetail__sendRequest-btn">Delete this pet</button>
                    @endif

                    @if ($user->id != $pet->sitterId && $pet->sitterId != null)
                        <button class="btn petDetail__sendRequest-btn">This pet is back home</button>
                    
                    @endif
                </section>

            </section>


        </section>
        
    </main>
@endsection