<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant detail - Voedselbank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 70%;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .invalid-feedback {
            color: #dc3545;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<h1>Klant Details {{ $family->representative->voornaam }} {{ $family->representative->tussenvoegsel }} {{ $family->representative->achternaam }}</h1>

<form action="{{ route('customers.updateRepresentative', $family->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="voornaam">Voornaam:</label>
    <input type="text" id="voornaam" name="voornaam" value="{{ $family->representative->voornaam }}">

    <label for="tussenvoegsel">Tussenvoegsel:</label>
    <input type="text" id="tussenvoegsel" name="tussenvoegsel" value="{{ $family->representative->tussenvoegsel }}">

    <label for="achternaam">Achternaam:</label>
    <input type="text" id="achternaam" name="achternaam" value="{{ $family->representative->achternaam }}">

    <label for="geboortedatum">Geboortedatum:</label>
    <input type="date" id="geboortedatum" name="geboortedatum" value="{{ $family->representative->geboortedatum }}">

    <label for="typepersoon">Type Persoon:</label>
    <input type="text" id="typepersoon" name="typepersoon" value="Klant" readonly>

    <label for="vertegenwoordiger">Vertegenwoordiger:</label>
    <input type="text" id="vertegenwoordiger" name="vertegenwoordiger" value="{{ $family->representative->is_vertegenwoordiger ? 'Ja' : 'Nee' }}" readonly>

    <label for="straat">Straatnaam:</label>
    <input type="text" id="straat" name="straat" value="{{ $family->representative->contact->straat }}">

    <label for="huisnummer">Huisnummer:</label>
    <input type="text" id="huisnummer" name="huisnummer" value="{{ $family->representative->contact->huisnummer }}">

    <label for="toevoeging">Toevoeging:</label>
    <input type="text" id="toevoeging" name="toevoeging" value="{{ $family->representative->contact->toevoeging }}">

    <label for="postcode">Postcode:</label>
    <input type="text" id="postcode" name="postcode" value="{{ old('postcode', $family->representative->contact->postcode) }}" class="{{ $errors->has('postcode') ? 'is-invalid' : '' }}">
    @error('postcode')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <label for="woonplaats">Woonplaats:</label>
    <input type="text" id="woonplaats" name="woonplaats" value="{{ $family->representative->contact->woonplaats }}">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $family->representative->contact->email }}">

    <label for="mobiel">Mobiel:</label>
    <input type="text" id="mobiel" name="mobiel" value="{{ $family->representative->contact->mobiel }}">

    <button type="submit" class="btn">Opslaan</button>
</form>

<a href="{{ route('customers.index') }}" class="btn btn-primary">Terug</a>
<a href="{{ url('/dashboard') }}" class="btn btn-primary">Home</a>

</body>
</html>
