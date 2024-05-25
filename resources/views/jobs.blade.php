<x-layout>
    <x-slot:headings>
        Job Listing
    </x-slot:headings>

    <ul>

        @foreach ($jobs as $job)
            <li><a class="text-blue hover:underline" href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }} </strong>: Pays {{ $job['salary'] }} per years.
                </a>
            </li>
        @endforeach

    </ul>

</x-layout>
