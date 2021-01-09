<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <meta
            name="description"
            content="Marché des gourmets, marché de producteurs locaux. Il se déroule dans la région liégeoise. Divers services sont proposé tels qu'un garderie pour les enfants et un restaurant tenu par les bénévoles du Rotary"
        />
        <meta
            name="keywords"
            content="marché, local, producteurs locaux, rotary, rotary club de flémalle, roatary flemalle, marché des gourmets, marché gourmets, produteurs, producteurs locaux"
        />
        <meta
            name="author"
            content="rotary club de flémalle"
        >
        <link
            rel="stylesheet"
            href="{{asset('css/app.css')}}"
        >
        <script
            src="{{ asset('js/app.js') }}"
            defer
        ></script>
        @yield('page-style')
        @yield('page-script')

        <title>Le marché des gourmets</title>
    </head>

    <body
        itemscope
        itemtype="https://schema.org/FoodEvent"
    >
        <header class="header">
            <h1 class="header__title">
                <a
                    href="/"
                    class="title__link"
                >Le marché <br>des
                    <span class="header__title header__title--manuscrit manuscrit">Gourmets</span></a>
            </h1>
            <label
                for="menu"
                class="header__toggle"
            >
                <div class="toggle__icon"><svg
                        width="24"
                        height="24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M4 6h16M4 12h16M4 18h16"
                            stroke="#eacc61"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg></div>
                <span class="sro">Afficher/Masquer le menu</span>
            </label>
            <input
                type="checkbox"
                name="menu"
                id="menu"
                class="sro"
            >
            <nav class="header__nav">
                <h2 class="sro">Navigation principale</h2>

                <ul class="nav__list">
                    <li><a {{request()->routeIs('home') ? "id=currentpage" : ""}}
                            class="nav__item"
                            href="/"
                            >Acceuil</a></li>
                    <li><a {{request()->routeIs('who we are') ? "id=currentpage" : ""}}
                            class="nav__item"
                            href="/qui-sommes-nous"
                            >Qui somme-nous</a></li>
                    <li><a {{request()->routeIs('became') ? "id=currentpage" : ""}}
                            class="nav__item"
                            href="/exposants"
                            >Exposants</a></li>
                    <li><a
                            class="nav__item"
                            href="/exposants#became"
                        >Devenir exposant</a></li>
                    <li><a {{request()->routeIs('contact') ? "id=currentpage" : ""}}
                            class="nav__item"
                            href="contact"
                            >Contact</a></li>
                    <li><a {{request()->routeIs('ticketing') ? "id=currentpage" : ""}}
                            class="nav__item"
                            href="billetterie"
                            >Billetterie</a></li>
                    <li><a {{request()->routeIs('edition') ? "id=currentpage" : ""}}
                            class="nav__item"
                            href="édition"
                            >Édition</a></li>
                </ul>
            </nav>

            @yield('main')
            @extends('_footer')