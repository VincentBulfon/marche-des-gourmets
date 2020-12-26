@extends('_layout')
@section('main')
<div class="header__landing header__landing--low header__landing--ed">

</div>
</header>
<main class="main">
    <section class="main__first">
        <h2 class="first__title title">
            Edition précédente
        </h2>
        <dl class="edition__infos">
            <dt class="edition__definition">Dates&nbsp;:</dt>
            <dd class="edition__term"><strong class="strong">27</strong> au <strong class="strong">28 Mars</strong> 2019</dd>
            <dt class="edition__definition">Lieu&nbsp;:</dt>
            <dd class="edition__term"><strong class="strong">Abbaye de le Paix Dieu</strong></dd>
            <dt class="edition__definition">Nombre de visiteurs&nbsp;:</dt>
            <dd class="edition__term"><strong class="strong">2800</strong></dd>
        </dl>
        <ul class="edition__container">
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
            <li><img class="edition__img" src="https://source.unsplash.com/random1920x1080" alt="" srcset=""></li>
        </ul>
        <div class="pagination">
            <a href="#" class="pagination__previous">Précédent</a>
            <a href="#" class="page">1</a>
            <a href="#" class="page">2</a>
            <a href="#" class="page page--current">3</a>
            <a href="#" class="page">4</a>
            <a href="#" class="page">5</a>
            <a href="#" class="pagination__next">Suivant</a>
        </div>
    </section>
</main>
@endsection
