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