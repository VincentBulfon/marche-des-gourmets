<form
    action=""
    class="second__form"
>
    <section class="form__section form__section--fltr form">
        <h3 class="second__subtitle subtitle form__subtitle">Filtrer les exposants</h3>
        <label
            class="label label--fltr1"
            for="country"
        >Séléctionner une ville&nbsp;:</label>

        <select
            class="select select--fltr1"
            name="region"
            id="country"
            wire:model="region"
            wire:change="regionChanged"
        >
            <option value="all">Toutes les régions</option>
            @foreach($countries as $k => $country)
            <optgroup label="{{$k}}">
                @foreach($country as $region)
                <option value="{{$region['id']}}">{{$region['region']}}</option>
                @endforeach
            </optgroup>
            @endforeach
        </select>
        <label
            class="
                    label
                    label--fltr2"
            for="category"
        >Séléctionner une catégorie de produit&nbsp;:</label>
        <select
            class="select select--fltr2"
            name="tag"
            id="category"
            wire:model="tag"
            wire:change="tagChanged"
        >
            <option value="all">Tous les types de produits</option>
            @foreach($tags as $tag)
            <option value="{{$tag['id']}}
            ">{{$tag['tag']}}</option>
            @endforeach
        </select>
        <div class="checkbox--fltr3">
            <input
                class="checkbox sro"
                type="checkbox"
                name="isBio"
                id="isBio"
                value="true"
                wire:click="$emitTo('exhibitors','isBio')"
            >
            <label
                class="label label--checkbox "
                for="isBio"
            >Seulement les produits BIO</label>

        </div>
    </section>
    <noscript>
        <input
            type="submit"
            value="Filtrer"
            class="cta cta--form"
        >
    </noscript>
</form>