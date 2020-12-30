@extends('_layout')
@section('main')
<div class="header__landing header__landing--low header__landing--ex">
</div>
</header>
<main class="main">
	<section class="main__first main__first--padding">
		<h2 class="first__title title title--short">
			Qui sont ces exposants
		</h2>
		<div class="first__about first__about--np">
			@markdown(Page::get('exhibitorsIntro'))

		</div>
	</section>
	@livewire('exhibitors')
	<section class="main__third main__third--bot">
		<h2
			class="third__title title"
			id="became"
		>
			Devenir exposant
		</h2>
		<form
			action=""
			class="became__form"
			class="form__section"
		>
			<section class="form__section form">
				<h3 class="tird__subtitle subtitle">Informations de contact</h3>
				<label
					for="name"
					class="label"
				>Nom&nbsp;:</label>
				<input
					class="input"
					type="text"
					name="name"
					id="name"
				>
				<label
					class="label"
					for="firstname"
				>Prénom&nbsp;:</label>
				<input
					class="input"
					type="text"
					name="firstname"
					id="firstname"
				>
				<label
					class="label"
					for="phone"
				>Téléphone&nbsp;:</label>
				<input
					class="input"
					type="text"
					name="phone"
					id="phone"
				>
			</section>
			<section class="form__section form form__section--footer">
				<h3 class="third__subtitle subtitle">Information sur l'entreprise</h3>
				<label
					for="company_name"
					class="label"
				>Nom de l'entreprise&nbsp;:</label>
				<input
					class="input"
					type="text"
					name="company_name"
					id="company_name"
				>
				<label
					class="label"
					for="about"
				>Description du/des produit(s)&nbsp;:</label>
				<textarea
					class="input textarea"
					name="about"
					id="about"
					cols="30"
					rows="4"
					placeholder="Ex: Salaisons des ardennes."
				></textarea>
				<label
					class="label"
					for="country"
				>Pays représenté&nbsp;:</label>
				<select
					class="select"
					name="country"
					id="country"
				>
					<option value="france">france</option>
					<option value="belgique">belgique</option>
				</select>
				<label
					for="region"
					class="label"
				>Région représentée&nbsp;:</label>
				<input
					class="input"
					type="text"
					name="region"
					id="region"
					list="regions"
				>
				<datalist id="regions">
					<option value="Alsace">
					<option value="Nord pas de calais">
					<option value="Parisienne">
					<option value="Liégeoise">
					<option value="Namuroise">
					<option value="Bruxelloise">
				</datalist>
				<fieldset class="fieldset">
					<legend class="fieldset__legend">Catégories de produits vendus&nbsp;:
					</legend class="fieldset__label label">
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="biscuits"
						id="biscuits"
					>
					<label
						class="fieldset__label label"
						for="biscuits"
					>Biscuits</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="dry_meat"
						id="dry_meat"
					>
					<label
						class="fieldset__label label"
						for="dry_meat"
					>Salaisons</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="wine"
						id="wine"
					>
					<label
						class="fieldset__label label"
						for="wine"
					>Vins</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="beer"
						id="beer"
					>
					<label
						class="fieldset__label label"
						for="beer"
					>Bière</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="cheeses"
						id="cheeses"
					>
					<label
						class="fieldset__label label"
						for="cheeses"
					>Fromages</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="appetizers"
						id="appetizers"
					>
					<label
						class="fieldset__label label"
						for="appetizers"
					>Apéritifs</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="pastries"
						id="pastries"
					>
					<label
						class="fieldset__label label"
						for="pastries"
					>Viennoiseries</label>
					<input
						class="fieldset__checkbox checkbox sro"
						type="checkbox"
						name="bio"
						id="bio"
					>
					<label
						class="fieldset__label label"
						for="bio"
					>Bio</label>

				</fieldset>

			</section>
			<input
				type="submit"
				value="Soumettre"
				class="cta cta--form cta--grid"
			>
		</form>
	</section>
</main>
@endsection