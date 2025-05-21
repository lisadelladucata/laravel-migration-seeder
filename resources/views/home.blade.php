<!DOCTYPE html>
<html>
<head>
    <title>Treni in Partenza</title>
</head>
<body>
    <h1>Treni in partenza</h1>

    @foreach ($trains as $train)
        <div style="margin-bottom: 20px;">
            <strong>{{ $train->agency }}</strong><br>
            Codice: {{ $train->train_code }}<br>
            Da: {{ $train->departure_station }} a {{ $train->arrival_station }}<br>
            Partenza: {{ \Carbon\Carbon::parse($train->departure_time)->format('d/m/Y H:i') }}<br>
            Arrivo: {{ \Carbon\Carbon::parse($train->arrival_time)->format('d/m/Y H:i') }}<br>
            Carrozze: {{ $train->total_carriages }}<br>
            Stato: 
            @if($train->deleted)
                <span style="color: red;">Cancellato</span>
            @elseif(!$train->on_time)
                <span style="color: orange;">In Ritardo</span>
            @else
                <span style="color: green;">In Orario</span>
            @endif
        </div>
    @endforeach

</body>
</html>
