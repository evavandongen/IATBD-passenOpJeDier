<article class="requestCard">
    
    <section class="requestCard__text">
        <h4>{{$pet->name}}</h4>
        @foreach ($users as $user)
            @if ($user->id == $pet->sitterId)
                <p>request by: <a href="/profile/{{$user->id}}">{{$user->name}}</a></p>
            @endif
        @endforeach
    </section>
    <section class="requestCard__reject">
        <form action="/pet/request/reject/{{$pet->id}}" method="POST">
            @method('patch')
            @csrf
            <button type="submit" class="requestCard__btn">
                <span class="material-icons u-noselect">
                    cancel
                </span>
            </button>
        </form>
        
    </section>
    <section class="requestCard__accept">
        <form action="/pet/request/accept/{{$pet->id}}" method="POST">
            @method('patch')
            @csrf
            <button type="submit" class="requestCard__btn">
                <span class="material-icons u-noselect">
                    check_circle
                </span>
            </button>
        </form>
    </section>
    
</article>