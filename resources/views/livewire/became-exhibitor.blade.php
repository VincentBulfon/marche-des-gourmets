<section class="main__third main__third--bot">
    <h2
        class="third__title title"
        id="became"
    >
        Devenir exposant
    </h2>
    <form
        action="/exposants"
        method="POST"
        class="became__form"
        class="form__section"
    >
        @if(session()->has('status'))
        <p class="sucessMessage">
            {{ session()->get('status') }}
        </p>
        @endif
        @csrf
        <section class="form__section form">
            <h3 class="tird__subtitle subtitle">Informations de contact</h3>
            @include('parts.personInfos')
        </section>
        <section class="form__section form form__section--footer">
            <h3 class="third__subtitle subtitle">Information sur l'entreprise</h3>
            <label
                for="company_name"
                class="label"
            >Nom de l'entreprise&nbsp;:*</label>
            <input
                class="input @if($errors->has('company_name')) inputError @endif"
                type="text"
                name="company_name"
                id="company_name"
                value="{{old('company_name')}}"
                autocomplete="off"
                required
            >
            @error('company_name') <p class="errorMessage">{{ $message }}</p> @enderror
            <label
                for="company_link"
                class="label"
            >Lien vers le site web/facebook&nbsp;:*</label>
            <input
                class="input @if($errors->has('company_link')) inputError @endif"
                type="text"
                name="company_link"
                id="company_link"
                value="{{old('company_link')}}"
                autocomplete="off"
                placeholder="http://exemple.com"
                required
            >
            @error('company_link')
            <p class="errorMessage">{{ $message }}</p> @enderror
            <label
                class="label"
                for="about"
            >Description du/des produit(s) (maximum 100 charactères)&nbsp;:*</label>
            <textarea
                class="input textarea @if($errors->has('about')) inputError @endif"
                name="about"
                id="about"
                cols="30"
                rows="4"
                maxlength="100"
                placeholder="Ex: Salaisons des ardennes."
            >{{old('about')}}</textarea>
            @error('about')
            <p class="errorMessage">{{ $message }}</p> @enderror
            <label
                class="label"
                for="country"
            >Pays représenté&nbsp;:*</label>
            <input
                class="select @if($errors->has('country')) inputError @endif"
                name="country"
                type="text"
                id="country"
                list="countries"
                value="{{old('country')}}"
                autocomplete="off"
            >
            @error('selectedCountry')
            <p class="errorMessage">{{ $message }}</p> @enderror
            <datalist id="countries">
                @foreach($countries as $k => $country)
                <option value="{{$k}}">{{$k}}</option>
                @endforeach
            </datalist>
            <label
                for="region"
                class="label"
            >Ville représentée&nbsp;:*</label>
            <input
                class="input @if($errors->has('region')) inputError @endif"
                type="text"
                name="region"
                id="region"
                list="regions"
                value="{{old('region')}}"
                autocomplete="off"
            >
            @error('region')
            <p class="errorMessage">{{ $message }}</p> @enderror
            <datalist id="regions">
                @foreach($countries as $k => $country)
                @foreach($country as $region)

                <option value="{{$region['region']}}">{{$region['region']}}</option>
                @endforeach
                @endforeach

            </datalist>
            <fieldset class="fieldset">
                <legend class="fieldset__legend">Catégories de produits vendus&nbsp;:*
                </legend class="fieldset__label label">

                @foreach($tags as $tag)
                <input
                    class="fieldset__checkbox checkbox sro"
                    type="checkbox"
                    name="tags[]"
                    id="{{$tag['tag']}}"
                    value="{{$tag['id']}}"
                    {{
                    (is_array(old('tags'))
                    &&
                    in_array($tag['id'],
                    old('tags')))
                    ? ' checked'
                    : ''
                    }}
                >
                <label
                    class="fieldset__label label"
                    for="{{$tag['tag']}}"
                >{{$tag['tag']}}</label>
                @endforeach

                <input
                    class="fieldset__checkbox checkbox sro"
                    type="checkbox"
                    name="bio"
                    id="bio"
                    value="true"
                    {{
                    old('bio')
                    ? ' checked'
                    : ''
                    }}
                >
                <label
                    class="fieldset__label label"
                    for="bio"
                >Bio</label>
            </fieldset>
        </section>
        <p class="label form--infos">Les champs maqués d'un "*" sont obligatoires.</p>
        <div class="submit__container submit__container--grid"><svg
                class="picto picto--filter picto--s"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 13l4 4L19 7"
                ></path>
            </svg>
            <input
                type="submit"
                value="Soumettre"
                class="cta cta--form cta--grid"
            >
        </div>
    </form>
</section>