@section('title')
    {{"Passen op je Dier | $thisuser->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="dashboard__wrapper">
        @include('user.components.navbar')

        <section class="dashboard">

            <article class="dashboard__filters">
                <h3>Filters</h3>
                <h4>Type of pet</h4>

                <section class="dashboard__filterList">

                    @foreach ($types_of_pets as $type)

                        @if ($type->type != "other")
                        <section class="dashboard__filter">
                            <input class="js--dashboardFilter" type="checkbox" id="{{$type->type}}" name="{{$type->type}}" data-type="{{$type->type}}">
                            <label for="{{$type->type}}">{{$type->type}}</label>
                        </section>
                        @endif

                    @endforeach
                    <section class="dashboard__filter">
                        <input class="js--dashboardFilter" type="checkbox" id="other" name="other" data-type="other">
                        <label for="other">other</label>
                    </section>
                </section>

            </article>
            
            <ul class="dashboard__petsList">
                @foreach ($pets as $pet)
                    @if ($pet->ownerId != $thisuser->id && $pet->sitterId != $thisuser->id)
                        <li class="js--dashboardPetCard" data-type-of-pet="{{$pet->type}}">
                            <a href="/pets/{{$pet->id}}">
                                    @include('user.components.pet-card')
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>

        </section>
        

    </main>
@endsection