@extends('layout.index')

@section('content')
    <form action="/editCompagnie/{{$id_show->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nom" value="{{ $id_show->nom }}">
        <input type="text" name="adresse" value="{{ $id_show->adresse }}">
        <input type="number" name="codePostal" value="{{ $id_show->codePostal }}">
        <input type="number" name="numeroPorte" value="{{ $id_show->numeroPorte }}">
        <input type="number" name="telephone" value="{{ $id_show->telephone }}">
        <input type="email" name="email" value="{{ $id_show->email }}">
        <input type="text" name="nomPerso" value="{{ $id_show->nomPerso }}">
        <input type="text" name="prenomPerso" value="{{ $id_show->prenomPerso }}">
        <input type="text" name="img" value="{{ $id_show->img }}">
        <input type="submit" value="Update">
    </form>
@endsection
