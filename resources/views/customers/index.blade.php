<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht klanten - Voedselbank</title>
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
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        select, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        td a {
            text-decoration: none;
            color: #007bff;
        }
        td a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Overzicht klanten</h1>

    <form action="{{ route('customers.searchByPostcode') }}" method="GET">
        <label for="postcode">Zoek op postcode:</label>
        <select name="postcode" id="postcode">
            <option value="">Selecteer Postcode</option>
            @foreach($uniquePostcodes as $postcode)
                <option value="{{ $postcode }}">{{ $postcode }}</option>
            @endforeach
        </select>
        <button type="submit">Toon</button>
    </form>

    @if(isset($message))
        <p>{{ $message }}</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Naam gezin</th>
                    <th>Vertegenwoordiger</th>
                    <th>Email</th>
                    <th>Mobiel</th>
                    <th>Adres</th>
                    <th>Woonplaats</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($families as $family)
                    <tr>
                        <td>{{ $family->naam }}</td>
                        <td>{{ $family->representative->voornaam }} {{ $family->representative->tussenvoegsel }} {{ $family->representative->achternaam }}</td>
                        <td>{{ $family->representative->contact->email }}</td>
                        <td>{{ $family->representative->contact->mobiel }}</td>
                        <td>{{ $family->representative->contact->straat }} {{ $family->representative->contact->huisnummer }} {{ $family->representative->contact->toevoeging }}</td>
                        <td>{{ $family->representative->contact->woonplaats }}</td>
                        <td><a href="{{ route('customers.show', $family->id) }}">Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ url('/dashboard') }}" class="btn">Home</a>

</body>
</html>
