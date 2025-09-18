<x-layout>
    <x-slot:heading>
        Jobs listings
    </x-slot:heading>

    <div>
        @foreach ( $jobs as $job )
            <article>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
            </article>
            
        @endforeach
    </div>
</x-layout>
