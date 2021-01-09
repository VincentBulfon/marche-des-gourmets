@extends('_layout')
@section('page-style')

@endsection
@section('page-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('main')
<div class="header__landing header__landing--low header__landing--tik">

</div>
</header>
<main class="main">
	<section class="main__first main__first--contain">
		<div class="contact__container">
			<h2 class="first__title title title--short">
				Checkout
			</h2>
			<dl class="total total--block">
				<dt class="total__definition">Nombre de tickets&nbsp;:</dt>
				<dd class="total__price total__price--block">{{$nbrTickets}}</dd>
				<dt class="total__definition">Prix total&nbsp;:</dt>
				<dd class="total__price total__price--block">{{$total}}€</dd>
			</dl>
			<form
				id="payment-form"
				class="checkout--form"
			>

				<div id="card-element">
					<!--Stripe.js injects the Card Element-->
				</div>

				<button id="submit">

					<div
						class="spinner hidden"
						id="spinner"
					></div>

					<span id="button-text">Pay</span>

				</button>

				<p
					id="card-error"
					role="alert"
				></p>

				<p class="result-message hidden">

					Payment succeeded, see the result in your

					<a
						href=""
						target="_blank"
					>Stripe dashboard.</a> Refresh the page to pay again.

				</p>

			</form>
	</section>
</main>
@endsection