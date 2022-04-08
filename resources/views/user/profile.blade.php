@section('title')
    {{"Passen op je Dier | $user->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="userProfile__wrapper">
        @include('user.components.navbar')

        <section class="userProfile">

            <a class="goBack" href="/dashboard">
                <span class="material-icons">
                    arrow_back
                </span>
                Back to home 
            </a>
            
            <section class="userProfile__header">
                <h2>This is {{$user->name}}</h2>
            </section>

            <section class="userProfile__content">

                <section class="userProfile__reviews">
                    <h3>Reviews</h3>
                    
                    <section class="userProfile__list-reviews">
                        @foreach ($reviews as $review)
                            @if ($review->toId == $user->id)
                                @include('user.components.review-card')
                            @endif
                        @endforeach
                    </section>

                    <form class="userProfile__reviews-form" action="/review" method="POST" >
                        @csrf
                        <section class="reviews-form__section">
                            <label for="review">Write a review for {{$user->name}}</label>
                            <textarea id="name" name="review"></textarea>
                        </section>
                        
                        <input type="hidden" id="toId" name="toId" value="{{$user->id}}">

                        {{-- <input type="hidden" id="fromId" name="fromId" value="{{$thisuser->id}}"> --}}

                        <section class="reviews-form__section">
                            <button class="btn" type="submit">Post review</button>
                        </section>

                    </form>
                
                </section>

                <section class="userProfile__images">
                    <figure class="userProfile__image">
                        <img src="../../img/home/01.jpg" alt="">
                    </figure>
                    <figure class="userProfile__image">
                        <img src="../../img/home/02.jpg" alt="">
                    </figure>
                    <figure class="userProfile__image">
                        <img src="../../img/home/03.jpg" alt="">
                    </figure>
                    <figure class="userProfile__image">
                        <img src="../../img/home/04.jpg" alt="">
                    </figure>
                </section>

            </section>
                
        </section>
        

    </main>
@endsection