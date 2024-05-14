<x-layout>
    <x-slot:headings>
        Job Listings
    </x-slot:headings>

    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }} </strong>: Pays {{ $job['salary'] }} per years</li>
    @endforeach

</x-layout>
