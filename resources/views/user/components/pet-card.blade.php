<article class="petCard">

    <figure class="petCard__image">
        <img src="{{$pet->image}}" alt="pet image">
    </figure>
    
    <section class="petCard__text">
        <h3>{{$pet->name}}</h3>
        <section class="petCard__text-type" >
            <span class="material-icons u-noselect">
                pets
            </span>
            <p>{{$pet->type}}</p>
        </section>
        <section class="petCard__dates">
            <span class="material-icons u-noselect">
                event
            </span>
            <p>{{date("d/m/y", strtotime($pet->startDate))}} - {{date("d/m/y", strtotime($pet->endDate))}}</p>
        </section>
    
        @if ($thisuser->role == "Admin")
            <section class="petCard__admin-delete">
                <a href="/pet/delete/{{$pet->id}}"> 
                    <span class="material-icons u-noselect">
                        cancel
                    </span>
                </a>
            </section>
        @endif
    </section>
    
    
</article>