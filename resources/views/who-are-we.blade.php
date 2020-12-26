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
            <p class="first__about first__about--p">
                Le Rotary Club de Flémalle, composé de <strong class="strong">36 membres bénévoles,</strong> fait
                partie du réseau
                des 34.164 clubs
                du <strong class="strong">Rotary International,</strong> fort de <strong class="strong">1.223.083
                    membres répartis dans le monde
                    entier.</strong>
                Conscient des
                difficultés présentes dans notre société, il a inscrit dans ses objectifs l’<strong class="strong">
                    aide en faveur de la
                    jeunesse et des plus démunis.
                </strong>
            </p>
            <p class="first__about first__about--p">
                Les bénévoles préparent des activités où les bénéfices font <strong
                    class="strong">intégralement</strong>
                distribués aux association
                que nous aidons. Soit sous la forme d'aide finacière soit d'aide matérielle. Une <strong
                    class="strong">étude
                    préalable</strong> est
                toujours réalisée.
            </p>
            <a
                class="cta cta--about"
                href="#"
            >Visiter le rotary</a>
        </section>
        <section class="main__second main__second--reverse">
            <div class="second__container">
                <div class="second__header second__header--right">
                    <h2 class="second__title second__title--left title">Quelques actions mennées</h2>
                    <ol class="second__actions">
                        <li class="second__action">Financer des colis alimentaires pour des associations locales.</li>
                        <li class="second__action">Appuyer des projets d’extension de foyers d’accueil de la région
                            liégeoise.</li>
                        <li class="second__action">Organiser le traitement médical puis l’insertion sociale d’une
                            personne handicapée.</li>
                        <li class="second__action">Financer la réalisation d’un réseau de distribution d’eau au Mali
                            Soutenir une association qui construit des maisons durables au Bangladesh.
                        </li>
                        <li class="second__action">Développer des programmes scolaires au Bénin et à Madagascar.</li>
                        <li class="second__action">Financer des bourses d’études pour des jeunes désireux de se
                            perfectionner à l’étrange.</li>
                        <li class="second__action">Contribuer à en finir avec la polio une fois pour toutes, priorité du
                            Rotary, en partenariat avec la Fondation Bill & Melinda Gates, l’Organisation mondiale de la
                            Santé et l’UNICEF.</li>
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