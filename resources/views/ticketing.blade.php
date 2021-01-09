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
            @foreach (Page::flexible('ticketing_intro') as $layout)
            <div class="first__about">@markdown($layout->content)</div>
            @endforeach
        </div>
        <div class="bg">
            @livewire('ticketing')
        </div>
    </section>
    @include('parts.info');
</main>
@endsection