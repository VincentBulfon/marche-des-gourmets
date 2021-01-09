<section class="main__second">
	<div class="second__head second__head--white">
		<h2 class="second__title title">Infos pratiques</h2>
		<section class="second__card second__card--right">
			<h3 class="card__header">Quand?</h3>
			<ol class="card__dates">
				<li
					class="card__date"
					itemprop="startDate"
				>Le <span class="card__bold">27</span> mars de <span class="card__bold">12h à
						22h</span></li>
				<li
					class="card__date"
					itemprop="endDate"
				>Le <span class="card__bold">28</span> mars de <span class="card__bold">12h à
						20h</span></li>
			</ol>
			<a
				href="/billetterie"
				class="card__cta"
			>Acheter des places</a>
		</section>
		<section class="second__card second__card--right">
			<h3 class="card__header">Où?</h3>
			<p class="card__content">@option('Infos.placeName')
			</p>
			<p class="card__content"><strong
					class="card__regular"
					itemprop="location"
				> @option('Infos.placeAddress')

				</strong></p>
			<a
				href="@option('Infos.placeLink')"
				class="card__cta"
				target="blank"
			>Voir le trajet sur Google maps</a>
		</section>
		<section class="second__card second__card--right">
			<h3 class="card__header">Qui?</h3>
			<div class="card__content"> @option('Infos.who')</div>
			<a
				href="/exposants"
				class="card__cta"
			>Voir les exposants</a>
		</section>
		<section class="second__card second__card--right">
			<h3 class="card__header">Prix?</h3>
			<p class="card__content">Entrée <strong class="card__bold">6€</strong> gratuit pour les moins de
				16ans.
				Garderie pour les
				enfants sur
				place.</p>
			<a
				href="/billetterie"
				class="card__cta"
			>Acheter des places</a>
		</section>
		<img
			class="main__second__bg main__second__bg--horizontal"
			src="../assets/cheese_white_bg.png"
			alt=""
		>
	</div>
</section>