@extends('_layout')
@section('main')
<div class="header__landing header__landing--low header__landing--con">
</div>
</header>
<main class="main">
    <section class="main__first main__first--contain">
        <div class="contact__container">
            <h2 class="first__title title title--short">
                Une question? Besion d'une information?
            </h2>
            <p class="first__about">
                Vous avez une <strong class="strong">question</strong> ou besoin d'une <strong
                    class="strong">information?</strong> N'hésitez pas à nous écrire! Si vous souahiter être
                <strong class="strong"> exposant,</strong> cela se passe <span class="strong"><a
                        href="{{route('became')}}"
                    >ici.</a></span>
            </p>
        </div>
        <div class="bg">
            <div class="form__container">
                <form
                    id="messageForm"
                    action="{{route('send_message')}}"
                    method="POST"
                    class="contact__form form"
                >
                    @csrf
                    <h3 class="tird__subtitle subtitle">Nous contacter</h3>
                    @if(session()->has('status'))
                    <p class="sucessMessage">
                        {{ session()->get('status') }}
                    </p>
                    @endif
                    @csrf
                    @include('parts.personinfos')
                    <label
                        class="label"
                        for="message"
                    >Message&nbsp;:</label>
                    <textarea
                        class="input textarea @if($errors->has('message')) inputError @endif"
                        name="message"
                        id="message"
                        cols="10"
                        rows="10"
                    >{{old('message')}}</textarea>
                    @error('message')
                    <p class="errorMessage">{{ $message }}</p> @enderror
                    <input
                        type="submit"
                        value="Envoyer"
                        class="cta cta--form"
                    >
                </form>
                <dl class="main__infos">
                    <dt class=" sro main__definition">Email</dd>
                    <dd class="main__info">marchedesgourmets@gmail.com</dd>
                    <dt class=" sro main__definition">Téléphone</dd>
                    <dd class="main__info">04&nbsp;374&nbsp;25&nbsp;54</dd>
                </dl>
            </div>
        </div>
    </section>
    <section class="main__second">
        <div class="second__head second__head--white">
            <h2 class="second__title title">Infos pratiques</h2>
            <section class="second__card ">
                <h3 class="card__header">Quand?</h3>
                <ol class="card__dates">
                    <li class="card__date">Le<span class="card__bold"> 27</span> mars de <span class="card__bold">12h à
                            22h</span></li>
                    <li class="card__date">Le<span class="card__bold"> 28</span> mars de <span class="card__bold">12h à
                            20h</span></li>
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