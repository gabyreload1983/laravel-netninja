<x-layout>
    <h1>Ninjas</h1>
    <ul>
        @foreach($ninjas as $ninja)
        <li>
            <a href="/ninjas/{{ $ninja['id'] }}">{{ $ninja['name'] }}</a>
        </li>
        @endforeach
    </ul>
</x-layout>