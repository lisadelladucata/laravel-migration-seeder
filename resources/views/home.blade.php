<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellone Treni</title>

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>

    <h1>Tabellone Partenze</h1>

    <table class="tabellone">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Codice</th>
                <th>Carrozze</th>
                <th>Stato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->departure_station }}<br>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_station }}<br>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->total_carriages }}</td>
                    <td>
                        @if ($train->deleted)
                            <span class="cancellato">Cancellato</span>
                        @elseif (!$train->on_time)
                            <span class="ritardo">In ritardo</span>
                        @else
                            <span class="in-orario">In orario</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
