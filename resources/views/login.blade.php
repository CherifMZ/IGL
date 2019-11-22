<!DOCTYPE html>
<html>
<title>Welcome</title> 
<head>
<!-- En-tête du document  -->
</head>
 
<body>
<form  method="post" action="/login.redirect">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
	<label for="">Email</label>
	<input type="text" name="email">
	<label for="">Mot de passe</label>
	<input type="password" name="password">
</div>
	<button type="submit">Se connecter</button>
</form>
</body>
 
</html>