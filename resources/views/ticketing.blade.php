@extends('_layout')
@section('main')
<div class="header__landing header__landing--low header__landing--tik">

</div>
</header>
<main class="main">
    <section class="main__first main__first--contain">
        <div class="contact__container">
            <h2 class="first__title title title--short">
                Envie de venir?
            </h2>
            <p class="first__about">
                <strong class="strong">Entrée à 6€,</strong> gratuite pour les moins de <strong class="strong">16
                    ans.</strong>
                <strong class="strong">Garderie</strong> prévue pour les enfants.
            </p>
            <p class="first__about">
                N'hésitez pas à réserver aussi pour vos amis.
            </p>
        </div>
        <div class="bg">
            @livewire('ticketing')
        </div>
    </section>
    <section class="main__second">
        <div class="second__head second__head--white">
            <h2 class="second__title title">Infos pratiques</h2>
            <section class="second__card">
                <h3 class="card__header">Quand?</h3>
                <ol class="card__dates">
                    <li class="card__date">Le<span class="card__bold">27</span> mars de <span class="card__bold">12h
                            à 22h</span></li>
                    <li class="card__date">Le<span class="card__bold">28</span> mars de <span class="card__bold">12h
                            à 20h</span></li>
                </ol>
                <a
                    href="/billetterie"
                    class="card__cta"
                >Acheter des places</a>
            </section>
            <section class="second__card">
                <h3 class="card__header">Où?</h3>
                <p class="card__content">À l' <strong class="card__bold">abbaye du Val Saint Lambert</strong>
                </p>
                <p class="card__content"><strong class="card__regular">Esplanade du Val St-Lambert BE 4100
                        Seraing</strong></p>
                <a
                    href="#"
                    class="card__cta"
                >Voir le trajet sur Google maps</a>
            </section>
            <section class="second__card">
                <h3 class="card__header">Qui?</h3>
                <p class="card__content">Un total de<span class="card__bold">30 exposants</span>des "métier de
                    bouche" choisis par nos soins.</p>
                <a
                    href="/exposants"
                    class="card__cta"
                >AVoir les exposants</a>
            </section>
            <section class="second__card">
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
        </div>
    </section>
</main>
@endsection