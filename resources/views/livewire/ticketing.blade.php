<div class="form__container">
    <form
        action="{{route('ticket_buy')}}"
        class="contact__form form"
        id="ticketing"
        method="POST"
    >
        @csrf
        <h3 class="tird__subtitle subtitle">Achat de billets</h3>
        @include('parts.sucess')
        <label
            for="name"
            class="label"
        >Nom&nbsp;:*</label>
        <input
            required
            class="input @if($errors->has('name')) inputError @endif"
            type="text"
            name="name"
            id="name"
            autocomplete="off"
            value="{{old('name')}}"
        >
        @error('name') <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="firstname"
        >Prénom&nbsp;:*</label>
        <input
            required
            class="input @if($errors->has('firstname')) inputError @endif"
            type="text"
            name="firstname"
            id="firstname"
            autocomplete="off"
            value="{{old('firstname')}}"
        />
        @error('firstname') <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="phone"
        >Téléphone&nbsp;:*</label>
        <input
            required
            class="input @if($errors->has('phone')) inputError @endif"
            type="text"
            name="phone"
            id="phone"
            value="{{old('phone')}}"
            autocomplete="off"
        > @error('phone')
        <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="email"
        >Email&nbsp;:*</label>
        <input
            required
            class="input @if($errors->has('email')) inputError @endif"
            type="text"
            name="email"
            id="email"
            value="{{old('email')}}"
            autocomplete="off"
        >
        @error('email')
        <p class="errorMessage">{{ $message }}</p> @enderror
        <label
            class="label"
            for="tickets"
        >Quantité (6€ l'unité)&nbsp;:*</label>
        <input
            required
            class="input @if($errors->has('tickets')) inputError @endif"
            name="tickets"
            id="tickets"
            type="number"
            wire:model.debounce.250ms='tickets'
            value="{{old('quantity')}}"
        />
        @error('tickets')
        <p class="errorMessage">{{ $message }}</p>
        @enderror
        <dl class="total">
            <dt class="total__definition">Prix total&nbsp;:</dt>
            <dd class="total__price">{{$this->totalPrice}}€</dd>
        </dl>
        @include('parts.submit-button')
    </form>
</div>