<x-layout>
    <x-slot:headings>
        Edit Job: {{ $job->title }}
    </x-slot:headings>

    <form method="POST" action="/jobs/{{$job->id }}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful details from you</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" value="{{ $job->title }}" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
                            </div>
                            @error('title')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary"  value="{{ $job->salary }}" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000 per years" required>
                            </div>
                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

{{--                @if($errors->any())--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li class="py-2 text-red italic">{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class=" flex item-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>
           <div class="flex items-center justify-end gap-x-6">
               <a href="/jobs/{{ $job->id }}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
               <div>
                   <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
               </div>
           </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method("DELETE")
    </form>


</x-layout>
