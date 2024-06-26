<!DOCTYPE html>
<html>
<head>
    <title>Klant detail - Voedselbank</title>
</head>
<body>
<h1>Klant Details {{ $family->representative->voornaam }} {{ $family->representative->tussenvoegsel }} {{ $family->representative->achternaam }}</h1>

<form action="{{ route('customers.updateRepresentative', $family->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" value="{{ $family->representative->voornaam }}"><br><br>

        <label for="tussenvoegsel">Tussenvoegsel:</label>
        <input type="text" id="tussenvoegsel" name="tussenvoegsel" value="{{ $family->representative->tussenvoegsel }}"><br><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" value="{{ $family->representative->achternaam }}"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $family->representative->contact->email }}"><br><br>

        <label for="mobiel">Mobiel:</label>
        <input type="text" id="mobiel" name="mobiel" value="{{ $family->representative->contact->mobiel }}"><br><br>

        <label for="straat">Straat:</label>
        <input type="text" id="straat" name="straat" value="{{ $family->representative->contact->straat }}"><br><br>

        <label for="huisnummer">Huisnummer:</label>
        <input type="text" id="huisnummer" name="huisnummer" value="{{ $family->representative->contact->huisnummer }}"><br><br>

        <label for="toevoeging">Toevoeging:</label>
        <input type="text" id="toevoeging" name="toevoeging" value="{{ $family->representative->contact->toevoeging }}"><br><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" value="{{ $family->representative->contact->postcode }}"><br><br>

        <label for="woonplaats">Woonplaats:</label>
        <input type="text" id="woonplaats" name="woonplaats" value="{{ $family->representative->contact->woonplaats }}"><br><br>

        <button type="submit">Opslaan</button>
    </form>
</body>
</html>
