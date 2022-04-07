<article class="requestCard">
    
    <section class="requestCard__text">
        <h4>{{$pet->name}}</h4>
        @foreach ($users as $user)
            @if ($user->id == $pet->sitterId)
                <p>request by: <a href="/users/{{$user->id}}">{{$user->name}}</a></p>
            @endif
        @endforeach
    </section>
    <section class="requestCard__accept">
        <span class="material-icons u-noselect">
            check_circle
        </span>
    </section>
    
</article>