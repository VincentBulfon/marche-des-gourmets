@extends('_layout')



@section('main')
<div class="header__landing">
    <p class="landing__intro">Le {{Page::get('edition')}}<span class="exposure">e</span> marché <br> des <span
            class="landing__manuscrit manuscrit"
        >Gourmets</span></p>
</div>
</header>
<main class="main">
    <section class="main__first">
        <div class="section__head__wrapper">
            <h2 class="first__title title">
                Qu'est-ce que le marché des gourmets?
            </h2>
            <div class="intro__wrapper">

                @foreach (Page::flexible('intro') as $layout)
                <div class="intro__main">
                    @markdown($layout->content)
                </div>
                @endforeach
                <!-- <div class="intro__main"> //content here </div> -->
                <a
                    class="intro__cta cta"
                    href=""
                ><svg
                        class="picto"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
                        />
                    </svg> Acheter des places</a>
            </div>
            <img
                class="main__first__bg"
                src="../assets/meat_movement_white_bg.png"
                alt=""
            >
        </div>
        <div class="promo">
            <img
                class="promo__item"
                src="https://source.unsplash.com/random/1920x1080"
                alt=""
                srcset=""
            >
            <img
                class="promo__item"
                src="https://source.unsplash.com/random/1920x1080"
                alt=""
                srcset=""
            >
            <img
                class="promo__item"
                src="https://source.unsplash.com/random/1920x1080"
                alt=""
                srcset=""
            >
            <img
                class="promo__item"
                src="https://source.unsplash.com/random/1920x1080"
                alt=""
                srcset=""
            >
        </div>
    </section>
    <section class="main__second">
        <div class="second__head">
            <h2 class="second__title second__title--right title">Infos pratiques</h2>
            <section class="second__card second__card--right">
                <h3 class="card__header">Quand?</h3>
                <ol class="card__dates">
                    <li class="card__date">Le <span class="card__bold">27</span> mars de <span class="card__bold">12h à
                            22h</span></li>
                    <li class="card__date">Le <span class="card__bold">28</span> mars de <span class="card__bold">12h à
                            20h</span></li>
                </ol>
                <a
                    href="/billetterie"
                    class="card__cta"
                >Acheter des places</a>
            </section>
            <section class="second__card second__card--right">
                <h3 class="card__header">Où?</h3>
                <p class="card__content">@option('Infos.placeName')
                </p>
                <p class="card__content"><strong class="card__regular"> @option('Infos.placeAddress')

                    </strong></p>
                <a
                    href="@option('Infos.placeLink')"
                    class="card__cta"
                    target="blank"
                >Voir le trajet sur Google maps</a>
            </section>
            <section class="second__card second__card--right">
                <h3 class="card__header">Qui?</h3>
                <div class="card__content"> @option('Infos.who')</div>
                <a
                    href="/exposants"
                    class="card__cta"
                >Voir les exposants</a>
            </section>
            <section class="second__card second__card--right">
                <h3 class="card__header">Prix?</h3>
                <p class="card__content">Entrée <strong class="card__bold">6€</strong> gratuit pour les moins de
                    16ans.
                    Garderie pour les
                    enfants sur
                    place.</p>
                <a
                    href="/billetterie"
                    class="card__cta"
                >Acheter des places</a>
            </section>
            <img
                class="main__second__bg"
                src="../assets/cheese_white_bg.png"
                alt=""
            >
        </div>
    </section>
    <section class="main__third">
        <h2 class="third__title title">Notre partenaire</h2>
        <img
            src="{{asset('assets/logo_province.svg')}}"
            alt="logo de la province de Liège"
            class="third__partner"
        >
    </section>
</main>
@endsection