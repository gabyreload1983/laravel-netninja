<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
</head>

<body>
    <h1>Ninjas</h1>

    <ul>
        <li>
            <a href="/ninjas/{{ $ninjas[0]['id'] }}">{{ $ninjas[0]['name'] }}</a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[1]['id'] }}">{{ $ninjas[1]['name'] }}</a>
        </li>
    </ul>
</body>

</html>