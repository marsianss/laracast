<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job{{ $job['id'] }}" class= "text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong></a> Pays {{ $job['salary'] }} per year.
            
            </li>
        @endforeach
    </ul>
</x-layout>
