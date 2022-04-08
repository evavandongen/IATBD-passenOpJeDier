<article class="reviewCard">
    
    <section class="reviewCard__text">
        @foreach ($allUsers as $allUser)
            @if ($allUser->id == $review->fromId)
                <p class="reviewCard__text-from">{{$allUser->name}}</a></p>
            @endif
        @endforeach
        <p>{{$review->review}}</p>
    </section>
    
</article>