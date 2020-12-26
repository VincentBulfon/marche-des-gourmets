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
		<p class="first__about first__about--np">
			Ce sont ceux que nous avons choisi pour leurs produits authentiques ou innovants. Et qui au fur et à
			mesure du temps on fait notre réputation.
		</p>
	</section>
	<section class="main__second main__second--green">
		<div class="second__exhibs">
			<h2 class="second__title title">Les exposants</h2>
			<form
				action=""
				class="second__form"
			>
				<section class="form__section form__section--fltr form">
					<h3 class="second__subtitle subtitle form__subtitle">Filtrer les exposants</h3>
					<label
						class="label label--fltr1"
						for="country"
					>Séléctionner un pays&nbsp;:</label>
					<select
						class="select select--fltr1"
						name="country"
						id="country"
					>
						<option value="all courties">Tous les pays</option>
						<option value="Belgium">Belgique</option>
						<option value="France">France</option>
					</select>
					<label
						class="label label--fltr2"
						for="category"
					>Séléctionner une catégorie de produit&nbsp;:</label>
					<select
						class="select select--fltr2"
						name="category"
						id="category"
					>
						<option value="all">Tous les types de produits</option>
						<option value="beer">bière</option>
						<option value="wine">Vine</option>
						<option value="biscuits">Biscuits</option>
						<option value="dried meat">Salaisons</option>
					</select>
					<div class="checkbox--fltr3"><label
							class="label label--checkbox "
							for="isBio"
						>Seulement les produits BIO</label>
						<input
							class="checkbox "
							type="checkbox"
							name="isBio"
							id="isBio"
						>
					</div>
				</section>
				<input
					type="submit submit--fltr"
					value="Filtrer"
					class="cta cta--form"
				>
			</form>
		</div>
		<div class="second__exhibs second__exhibs--filtred">
			<section class="exhib">
				<h3><a
						href="#"
						class="exhib__title"
					>Amitié Amay Benin</a></h3>
				<div class="exhib__about">
					<span class="exhib__info">Bière le mur de huy</span>
					<span class="exhib__info">Belgique</span>

					</ul>
					<ul class="exhib__tags">
						<li class="exhib__tag">Bière</li>
						<li class="exhib__tag">Bio</li>
						<li class="exhib__tag">Biscuits</li>
						<li class="exhib__tag">Bio</li>
					</ul>
			</section>
			<section class="exhib">
				<h3><a
						href="#"
						class="exhib__title"
					>Biscuits de Tom</a></h3>
				<div class="exhib__about">
					<div><span class="exhib__info">A long text to test if it fits in this exhibitor card. And it fiets
							very
							well. Max 100 characters.</span>
						<span class="exhib__info">Belgique</span>
					</div>
					</ul>
					<ul class="exhib__tags">
						<li class="exhib__tag">Biscuits</li>
						<li class="exhib__tag">Bio</li>
					</ul>
			</section>
			<section class="exhib">
				<h3><a
						href="#"
						class="exhib__title"
					>Choc à Lau</a></h3>
				<div class="exhib__about">
					<div><span class="exhib__info">Chocolat</span>
						<span class="exhib__info">Belgique</span>
					</div>
					</ul>
					<ul class="exhib__tags">
						<li class="exhib__tag">Biscuits</li>
					</ul>
			</section>
			<section class="exhib">
				<h3><a
						href="#"
						class="exhib__title"
					>Amitié Amay Benin</a></h3>
				<div class="exhib__about">
					<div><span class="exhib__info">Bière le mur de huy</span>
						<span class="exhib__info">Belgique</span>
					</div>
					</ul>
					<ul class="exhib__tags">
						<li class="exhib__tag">Bière</li>
						<li class="exhib__tag">Bio</li>
					</ul>
			</section>
			<section class="exhib">
				<h3><a
						href="#"
						class="exhib__title"
					>Biscuits de Tom</a></h3>
				<div class="exhib__about">
					<div><span class="exhib__info">Biscuits à base de blé Bio</span>
						<span class="exhib__info">Belgique</span>
					</div>
					</ul>
					<ul class="exhib__tags">
						<li class="exhib__tag">Biscuits</li>
						<li class="exhib__tag">Bio</li>
					</ul>
			</section>
			<section class="exhib">
				<h3><a
						href="#"
						class="exhib__title"
					>Choc à Lau</a></h3>
				<div class="exhib__about">
					<div><span class="exhib__info">Chocolat</span>
						<span class="exhib__info">Belgique</span>
					</div>
					</ul>
					<ul class="exhib__tags">
						<li class="exhib__tag">Biscuits</li>
						<li class="exhib__tag">Chocolat</li>
						<li class="exhib__tag">Viennoiseries</li>
					</ul>
			</section>
			<div class="pagination">
				<a
					href="#"
					class="pagination__previous"
				>Précédent</a>
				<a
					href="#"
					class="page"
				>1</a>
				<a
					href="#"
					class="page"
				>2</a>
				<a
					href="#"
					class="page page--current"
				>3</a>
				<a
					href="#"
					class="page"
				>4</a>
				<a
					href="#"
					class="page"
				>5</a>
				<a
					href="#"
					class="pagination__next"
				>Suivant</a>
			</div>
		</div>
	</section>
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