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
                <dt class="edition__definition">Dates&nbsp;:&nbsp;</dt>
                <dd class="edition__term">
                    @markdown($year->date)
                </dd>
                <dt class="edition__definition">Lieu&nbsp;:&nbsp;</dt>
                <dd class="edition__term"><strong class="strong">{{$year->location}}</strong></dd>
                <dt class="edition__definition">Nombre de visiteurs&nbsp;:&nbsp;</dt>
                <dd class="edition__term"><strong class="strong">{{$year->populartiy}}</strong></dd>
            </dl>
            <div class="masonry">
                @if($year->getMedia('year-pictures'))
                @dump($year->getMedia('year-pictures'))
                @foreach($year->getMedia('year-pictures') as $media)
                {{$media()->lazy()->attributes(['class'=>'masonry__item'])}}
                @endforeach
                @else
                <p>Aucunes photos à afficher pour cette déition</p>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection