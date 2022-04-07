<article class="petCard" data-type-of-pet="{{$pet->type}}">

    <figure class="petCard__image">
        <img src="{{$pet->image}}" alt="pet image">
    </figure>
    
    <section class="petCard__text">
        <h2>{{$pet->name}}</h2>
        <section class="petCard__text-type" >
            <span class="material-icons">
                pets
            </span>
            <p>{{$pet->type}}</p>
        </section>
        <section class="petCard__dates">
            <span class="material-icons">
                event
            </span>
            <p>{{date("d/m/y", strtotime($pet->startDate))}} - {{date("d/m/y", strtotime($pet->endDate))}}</p>
        </section>
    </section>
    
</article>