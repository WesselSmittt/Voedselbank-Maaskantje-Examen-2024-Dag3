<!DOCTYPE html>
<html>
<head>
    <title>Klant detail - Voedselbank</title>
</head>
<body>
    <h1>Klant detail</h1>
    <p>Naam gezin: {{ $family->naam }}</p>
    <p>Vertegenwoordiger: {{ $family->representative->voornaam }} {{ $family->representative->tussenvoegsel }} {{ $family->representative->achternaam }}</p>
    <p>Email: {{ $family->representative->contact->email }}</p>
    <p>Mobiel: {{ $family->representative->contact->mobiel }}</p>
    <p>Adres: {{ $family->representative->contact->straat }} {{ $family->representative->contact->huisnummer }} {{ $family->representative->contact->toevoeging }}</p>
    <p>Woonplaats: {{ $family->representative->contact->woonplaats }}</p>
</body>
</html>
