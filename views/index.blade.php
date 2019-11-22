<!DOCTYPE html>
<html>
<title>Welcome</title> 
<head>
<!-- En-tête du document  -->
</head>
 
<body>
<from  method="post" action="/ajouter">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
	<label for="">Nom</label>
	<input type="text" name="nom">
	<label for="">Prenom</label>
	<input type="text" name="prenom">
    
</div>
	<button type="submit">ajouter</button>
</from>
</body>
 
</html>