<x-layout>
    <x-slot:headings>
        Job
    </x-slot:headings>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>

</x-layout>
