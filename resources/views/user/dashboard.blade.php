@section('title')
    {{"Passen op je Dier | $user->name" }}
@endsection

@extends('baseview')
@section('content')

    <main class="dashboard__wrapper">
        @include('user.components.navbar')

        <section class="dashboard">
            
        </section>
        

    </main>
@endsection