<html>

	<body>
		<section>
			<h1>Nouveau message depuis le marché des gourmets</h1>
			<section>
				<h2>Correspondant</h2>
				<p>Nom : {{$messageData['name']}}</p>
				<p>Prénom : {{$messageData['firstname']}}</p>
				<p>Téléphone : {{$messageData['phone']}}</p>
				<p>Email : {{$messageData['email']}}</p>
			</section>
			<section>
				<h2>Message</h2>
				<p>{{$messageData['message']}}</p>
			</section>
		</section>

	</body>

</html>