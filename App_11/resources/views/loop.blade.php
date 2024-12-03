<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loop</title>
</head>
<body>

    @if ($result==100)
    <h2>Two number total count 100</h2>
    @elseif ($result==1000) 
    <h2>Two number total count 100</h2>
    @else
    <h2>Total:{{ $result }}</h2>
    @endif

<strong>switch case using </strong>

        @switch($result)
            @case(100)
            <h2>Two number total count 100</h2>
            @break
            @case(1000)
            <h2>Two number total count 1000</h2>
            @break
            
            @default
            Total:{{ $result }}
        @endswitch

    <ul>
        @for ($i=0; $i<10; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>

 {{-- <strong>using foreach loop </strong>

    @foreach ($users as $user)
        <li>{{$user['name']}}</li>
        <li>{{$user['city']}}</li>
        <br>
    @endforeach --}}
    
</body>
</html>