<div class="second__exhibs second__exhibs--filtred">

    @if($data->first())
    @foreach($data as $exhib)
    <section class="exhib">
        <h3><a
                href="{{$exhib->link}}"
                class="exhib__title"
                target="blank"
            >
                <span class="sro">Voir le site/page facebook</span>
                {{$exhib->company_name}}</a></h3>
        <div class="exhib__about">
            <div><span class="exhib__info">{{$exhib->about}}</span>
                <span class="exhib__info exhib__info--location">{{$exhib->region->country}}</span>
                <span class="exhib__info exhib__info--location exhib__info--precise">{{$exhib->region->region}}</span>
            </div>
            </ul>
            <ul class="exhib__tags">
                @if($exhib->is_bio == true)
                <li class="exhib__tag">Bio</li>
                @endif
                @foreach($exhib->tags as $tag)
                <li class="exhib__tag">{{$tag->tag}}</li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- TODO pagination -->
    @endforeach
    @else
    <p class="empty">Aucuns éléments ne corespond à ces criètéres.</p>
    @endif

    @if($data->first())
    <div class="pagination">
        <a
            href="#"
            class="pagination__previous"
        >Précédent</a>
        <a
            href="#"
            class="page"
        >1</a>
        <a
            href="#"
            class="page"
        >2</a>
        <a
            href="#"
            class="page page--current"
        >3</a>
        <a
            href="#"
            class="page"
        >4</a>
        <a
            href="#"
            class="page"
        >5</a>
        <a
            href="#"
            class="pagination__next"
        >Suivant</a>
    </div>
    @endif
</div>