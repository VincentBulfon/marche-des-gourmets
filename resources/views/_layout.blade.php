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
            content=""
        />
        <meta
            name="keywords"
            content=""
        />
        <link
            rel="stylesheet"
            href="{{asset('css/app.css')}}"
        >
        <title>Le marché des gourmets</title>
    </head>

    <body>
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
                <div class="toggle__icon">SVG</div>
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
                    <li><a
                            class="nav__item"
                            href="/"
                        >Acceuil</a></li>
                    <li><a
                            class="nav__item"
                            href="/qui-sommes-nous"
                        >Qui somme-nous</a></li>
                    <li><a
                            class="nav__item"
                            href="/exposants"
                        >Exposants</a></li>
                    <li><a
                            class="nav__item"
                            href="/exposants#became"
                        >Devenir exposant</a></li>
                    <li><a
                            class="nav__item"
                            href="contact"
                        >Contact</a></li>
                    <li><a
                            class="nav__item"
                            href="billetterie"
                        >Billetterie</a></li>
                    <li><a
                            class="nav__item"
                            href="édition"
                        >Édition</a></li>
                </ul>
            </nav>

            @yield('main')
            @extends('_footer')