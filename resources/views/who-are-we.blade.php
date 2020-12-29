@extends('_layout')

@section('main')
<div class="header__landing header__landing--low header__landing--wwa">

</div>
</header>

<body>
    <main class="main">
        <section class="main__first main__first--padding">
            <h2 class="first__title title title--short">
                Qui sommes-nous?
            </h2>
            @foreach (Page::flexible('aboutUs') as $about)
            <div class="first__about first__about--p">
                @markdown($about->content)
            </div>
            @endforeach

            <a
                class="cta cta--about"
                href="{{Page::get('rotaryLink')}}"
            >Visiter le rotary</a>
        </section>
        <section class="main__second main__second--reverse">
            <div class="second__container">
                <div class="second__header second__header--right">
                    <h2 class="second__title second__title--left title">Quelques actions mennées</h2>
                    <ol class="second__actions">
                        @foreach (Page::flexible('actions') as $action)

                        <li class="second__action">
                            {!! $action->action !!}
                        </li>
                        @endforeach
                    </ol>
                </div>
                <div class="second__footer">
                    <img
                        class="second__footer__img"
                        src="https://source.unsplash.com/random1920x1080"
                        alt="Main qui tend de la nourriture"
                        srcset=""
                    >
                </div>
            </div>
        </section>
    </main>
    @endsection