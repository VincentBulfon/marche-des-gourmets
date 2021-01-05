<div class="form__container">
    <form
        action="{{route('ticket_buy')}}"
        class="contact__form form"
        id="ticketing"
        method="POST"
        wire.submit.prevent="submit"
    >
        @csrf
        <h3 class="tird__subtitle subtitle">Achat de billets</h3>
        @if(session()->has('status'))
        <p class="sucessMessage">
            {{ session()->get('status') }}
        </p>
        @endif
        <label
            for="name"
            class="label"
        >Nom&nbsp;:</label>
        <input
            class="input @if($errors->has('name')) inputError @endif"
            type="text"
            name="name"
            id="name"
            value="{{old('name')}}"
            autocomplete="off"
            wire:model.debounce.500ms='name'
            ;
        >
        @error('name') <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="firstname"
        >Prénom&nbsp;:</label>
        <input
            class="input @if($errors->has('firstname')) inputError @endif"
            type="text"
            name="firstname"
            id="firstname"
            value="{{old('firstname')}}"
            autocomplete="off"
            wire:model.debounce.500ms='firstname'
        />
        @error('firstname') <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="phone"
        >Téléphone&nbsp;:</label>
        <input
            class="input @if($errors->has('phone')) inputError @endif"
            type="text"
            name="phone"
            id="phone"
            value="{{old('phone')}}"
            autocomplete="off"
            wire:model.debounce.500ms="phone"
            ;
        > @error('phone')
        <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="email"
        >Email&nbsp;:</label>
        <input
            class="input @if($errors->has('email')) inputError @endif"
            type="text"
            name="email"
            id="email"
            value="{{old('email')}}"
            autocomplete="off"
            wire:model.debounce.500ms='email'
            ;
        >
        @error('email')
        <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="quantity"
        >Quantité (6€ l'unité)&nbsp;:</label>
        <input
            class="input @if($errors->has('quantity')) inputError @endif"
            name="quantity"
            id="quantity"
            type="number"
            wire:model.debounce.300ms='tickets'
            value="{{old('quantity')}}"
        />
        @error('quantity')
        <p class="errorMessage">{{ $message }}</p>
        @enderror
        <dl class="total">
            <dt class="total__definition">Prix total&nbsp;:</dt>
            <dd class="total__price">{{$this->totalPrice}}€</dd>
        </dl>
        <input
            type="submit"
            value="Envoyer"
            class="cta"
        >
    </form>
</div>