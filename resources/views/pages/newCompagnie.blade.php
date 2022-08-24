@extends('layout.index')

@section('content')
    <form action="/newCompagnie/create" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom de la société">
    <input type="text" name="adresse" placeholder="Adresse postale">
    <input type="number" name="codePostal" placeholder="Code postal">
    <input type="number" name="numeroPorte" placeholder="Numéro">
    <input type="number" name="telephone" placeholder="Numéro de téléphone">
    <input type="email" name="email" placeholder="Adresse e-mail">
    <input type="text" name="nomPerso" placeholder="Nom personne de contact">
    <input type="text" name="prenomPerso" placeholder="Prenom personne de contact">
    <input type="text" name="img" placeholder="URL image">
    <input type="submit" value="Ajouter">
</form>
@endsection
