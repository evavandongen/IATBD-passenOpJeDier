@section('title')
    {{"Passen op je Dier | $user->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="dashboard__wrapper">
        @include('user.components.navbar')

        <section class="dashboard">

            <article class="dashboard__filters">
                <h3>Type of animal</h3>

                @foreach ($types_of_pets as $type)

                    @if ($type->type != "other")
                    <section class="dashboard__filter">
                        <input type="checkbox" id="{{$type->type}}" name="{{$type->type}}">
                        <label for="{{$type->type}}">{{$type->type}}</label>
                    </section>
                    @endif

                @endforeach
                <section class="dashboard__filter">
                    <input type="checkbox" id="other" name="other">
                    <label for="other">other</label>
                </section>

            </article>
            
            <article class="dashboard__petsList">
                @foreach ($pets as $pet)
                    @if ($pet->ownerId != $user->id)
                        @include('user.components.pet-card')
                    @endif
                @endforeach
            </article>

        </section>
        

    </main>
@endsection