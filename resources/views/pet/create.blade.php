@section('title')
    {{"Passen op je Dier | Add Pet" }}
@endsection

@extends('baseview')
@section('content')

    <main class="create__wrapper">

        @include('user.components.navbar')

        <article class="create">

            <a class="goBack" href="/dashboard">
                <span class="material-icons">
                    arrow_back
                </span>
                Back to home 
            </a>
            
            <h2>Add new pet</h2>

            <form class="create__form" action="/pet" method="POST">
                @csrf
                <section class="create__form-section">
                    <label for="name">Name</label>
                    <input type="text" name="name" required>
                </section>

                <section class="create__form-section">
                    <label for="type">Type of pet</label>
                    <select name="type">
                        @foreach ($types_of_pets as $type_of_pet)
                            <option value="{{$type_of_pet->type}}" required>{{$type_of_pet->type}}</option>
                        @endforeach
                    </select>
                </section>

                <section class="create__form-section">
                    <label for="description">Description</label>
                    <textarea name="description" required></textarea>
                </section>

                <section class="create__form-section">
                    <label for="hourlyRate">Daily rate</label>
                    <input type="number" name="hourlyRate" min="0" value="0" step="0.1" required>
                </section>

                <section class="create__form-section">
                    <label for="startDate">Start date</label>
                    <input type="date" name="startDate" required>
                </section>

                <section class="create__form-section">
                    <label for="endDate">End date</label>
                    <input type="date" name="endDate" required>
                </section>

                <section class="create__form-section">
                    <button class="btn" type="submit"> Add pet</button>
                </section>

            </form>
            
        </article>
    </main>