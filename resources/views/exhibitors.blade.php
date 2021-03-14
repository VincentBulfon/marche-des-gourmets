@extends('_layout')
@section('main')

<div class="header__landing header__landing--low header__landing--ex">
</div>
</header>
<main class="main">
    <section class="main__first main__first--padding">
        <h2 class="first__title title title--short">
            Qui sont ces exposants&nbsp;?
        </h2>
        <div class="first__about first__about--np">
            @markdown(Page::get('exhibitorsIntro'))
        </div>
    </section>

    <section class="main__second main__second--green">
        <div class="second__exhibs">
            <h2 class="second__title title">Les exposants</h2>
            <livewire:exhibitor-form
                :rq="$rq"
                :tags="$tags"
                :countries="$countries"
            >
        </div>
        <livewire:exhibitors :rq='$rq'>
    </section>
    <livewire:became-exhibitor
        :tags="$tags"
        :countries="$countries"
    />
</main>
@endsection