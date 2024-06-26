<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Voedselpakketten</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Overzicht gezinnen met voedselpakketten</h2>
        <form action="{{ route('voedselpakketten.filter') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="eetwens">Selecteer Eetwens</label>
                <select name="eetwens_id" id="eetwens" class="form-control">
                    <option value="">Selecteer Eetwens</option>
                    @foreach($eetwensen as $eetwens)
                    <option value="{{ $eetwens->id }}">{{ $eetwens->naam }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Toon Gezinnen</button>
        </form>

        @if($gezinnen->isEmpty())
        <div class="alert alert-warning mt-3">Er zijn geen gezinnen bekend die de geselecteerde eetwens hebben</div>
        @else
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Gezinsnaam</th>
                    <th>Omschrijving</th>
                    <th>Volwassenen</th>
                    <th>Kinderen</th>
                    <th>Babys</th>
                    <th>Vertegenwoordiger</th>
                    <th>Voedselpakket Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gezinnen as $gezin)
                <tr>
                    <td>{{ $gezin->naam }}</td>
                    <td>{{ $gezin->omschrijving }}</td>
                    <td>{{ $gezin->aantal_volwassenen }}</td>
                    <td>{{ $gezin->aantal_kinderen }}</td>
                    <td>{{ $gezin->aantal_babys }}</td>
                    <td>
                        @foreach($gezin->personen as $persoon)
                        @if($persoon->IsVertegenwoordiger)
                        {{ $persoon->voornaam }} {{ $persoon->tussenvoegsel }} {{ $persoon->achternaam }}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($gezin->voedselpakketten as $voedselpakket)
                        <a href="#">{{ $voedselpakket->pakket_nummer }}</a>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</body>

</html>