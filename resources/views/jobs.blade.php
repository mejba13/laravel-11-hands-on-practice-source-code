<x-layout>
    <x-slot:headings>
        Job Listings
    </x-slot:headings>

    <ul>

        @foreach ($jobs as $job)
            <li><a href="">
                    <strong>{{ $job['title'] }} </strong>: Pays {{ $job['salary'] }} per years.
                </a>
            </li>
        @endforeach

    </ul>

</x-layout>
