<!DOCTYPE html>
<html>
<head>
    <title>Overzicht klanten - Voedselbank</title>
</head>
<body>
    <h1>Overzicht klanten</h1>

    <form action="{{ route('customers.searchByPostcode') }}" method="GET">
    <label for="postcode">Zoek op postcode:</label>
    <select name="postcode" id="postcode">
        @foreach($uniquePostcodes as $postcode)
            <option value="{{ $postcode }}">{{ $postcode }}</option>
        @endforeach
    </select>
    <button type="submit">Zoeken</button>
</form>



    @if(isset($message))
    <p>{{ $message }}</p>
@else
    <table border="1">
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

<a href="{{ route('dashboard') }}" class="button">Home</a>

</body>
</html>
