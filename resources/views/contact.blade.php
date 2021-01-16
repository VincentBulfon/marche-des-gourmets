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
                    @include('parts.personInfos')
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
                        required
                    >{{old('message')}}</textarea>
                    @error('message')
                    <p class="errorMessage">{{ $message }}</p> @enderror
                    @include('parts.submit-button')
                </form>
                <dl class="main__infos">
                    <dt class=" sro main__definition">Email</dd>
                    <dd class="main__info">{{Page::get("contact_email")}}</dd>
                    <dt class=" sro main__definition">Téléphone</dd>
                    <dd class="main__info">{{Page::get("contact_phone")}}</dd>
                </dl>
            </div>
        </div>
    </section>
    @include('parts.info');
</main>
@endsection