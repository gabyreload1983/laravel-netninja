<x-layout>
    <h1>Ninjas</h1>
    <ul>
        @foreach($ninjas as $ninja)
        <li>
            <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] > 80">
                <h3>{{ $ninja['name'] }}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>