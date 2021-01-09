@extends('_layout')
@section('main')
<div class="header__landing header__landing--low header__landing--ed">

</div>
</header>
<main class="main">
    <section class="main__first">
        <div class="contact__container">
            <h2 class="first__title title title--short edition">
                Edition précédente
            </h2>
            <dl class="edition__infos">
                <dt class="edition__definition">Dates&nbsp;:</dt>
                <dd class="edition__term"><strong class="strong">27</strong> au <strong class="strong">28 Mars</strong>
                    2019
                </dd>
                <dt class="edition__definition">Lieu&nbsp;:</dt>
                <dd class="edition__term"><strong class="strong">Abbaye de le Paix Dieu</strong></dd>
                <dt class="edition__definition">Nombre de visiteurs&nbsp;:</dt>
                <dd class="edition__term"><strong class="strong">2800</strong></dd>
            </dl>
            <div class="masonry">
                @foreach($year->getMedia('year-pictures') as $media)
                {{$media()->lazy()->attributes(['class'=>'masonry__item'])}}
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection