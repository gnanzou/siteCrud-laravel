<!DOCTYPE html > 
<html> 
<head> 
<meta charset ="utf-8"> 
<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fit=no "> 
<title>Téléchargement d'images multiples</title> 
</head>
<corps>
<div> 
<h3>Télécharger une image</h3> 
<hr>
<form method ="POST" action ="{{ route('cars.uploadproducts') }}" enctype ="multipart/form-data" > 
{{ csrf_field() }} 
<div > 
<label>Nom</label > < type
 d'entrée ="texte" nom ="nom" espace réservé ="Entrez le nom du produit">
<label>Description</label> 
<textarea name="description" rows="4" > 
</textarea></div>
<div> 
<label>Choisir des images</label> 
<input type ="file"   name ="images" multiple> 
</div>
<h>
<button type ="soumettre" >Soumettre</bouton>
</form>
</div>
</body>
</html>