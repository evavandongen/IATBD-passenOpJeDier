@section('title')
    {{"Passen op je Dier | $user->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="userDetail__wrapper">
        @include('user.components.navbar')

        <section class="userDetail">

            <a class="goBack" href="{{ url()->previous()}}">
                <span class="material-icons">
                    arrow_back
                </span>
                Go Back 
            </a>
            
            <section class="userDetail__header">
                <h2>This is {{$user->name}}</h2>
            </section>

            <section class="userDetail__content">

                <section class="userDetail__reviews">
                    <h3>Reviews</h3>
                    
                    <section class="userDetail__list-reviews">
                        @foreach ($reviews as $review)
                            @if ($review->toId == $user->id)
                            @include('user.components.review-card')
                            @endif
                        @endforeach
                    </section>

                    <form class="userDetail__reviews-form" >
                        @csrf
                        <section class="reviews-form__section">
                            <label for="review">Write a review for {{$user->name}}</label>
                            <textarea id="name" name="review"></textarea>
                        </section>
                        
                        <input type="hidden" id="toId" name="toId" value="{{$user->id}}">

                        <input type="hidden" id="fromId" name="fromId" value="{{$thisuser->id}}">

                        <section class="reviews-form__section">
                            <button class="btn" type="submit">Post review</button>
                        </section>

                    </form>
                
                </section>

                <section class="userDetail__images">
                    <figure class="userDetail__image">
                        <img src="../../img/home/01.jpg" alt="">
                    </figure>
                    <figure class="userDetail__image">
                        <img src="../../img/home/02.jpg" alt="">
                    </figure>
                    <figure class="userDetail__image">
                        <img src="../../img/home/03.jpg" alt="">
                    </figure>
                    <figure class="userDetail__image">
                        <img src="../../img/home/04.jpg" alt="">
                    </figure>
                </section>

            </section>
                
        </section>
        

    </main>
@endsection