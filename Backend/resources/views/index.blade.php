<!DOCTYPE html>
<html>
<title>Administration</title> 
<head>
<!-- En-tête du document  -->
</head>
 
<body>
<form  method="post" action="/ajouter">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
	<label for="">Nom</label>
	<input type="text" name="nom">
	<label for="">Prenom</label>
	<input type="text" name="prenom">
	<label for="">Email</label>
	<input type="text" name="email">
	<label for="">Mot de passe</label>
	<input type="text" name="password">
</div>
	<button type="submit">ajouter</button>
</form>
</body>
 
</html>