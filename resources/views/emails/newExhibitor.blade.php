<!DOCTYPE html>

<body>
	<h1>Nouvel exposant sur le marché des gourmets</h1>
	<p>Nu nouvel exposant s'est inscrit sur le site du marché des gourmets, veuillez vous connecter sur le site afin de
		valider ses données.</p>
	<div>
		<h2>Informations de contacts</h2>
		<p>Nom : {{$exhibitor->lastname}}</p>
		<p>Prénom : {{$exhibitor->firstname}}</p>
		<p>Email : {{$exhibitor->email}}</p>
		<p>Phone : {{$exhibitor->phone}}</p>
	</div>
	<div>
		<h2>Nom de l'exposant :</h2>
		<p>{{$exhibitor->company_name}}</p>
	</div>
</body>

</html>