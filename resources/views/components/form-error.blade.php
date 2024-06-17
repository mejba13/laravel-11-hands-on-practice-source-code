@props(['name'])
@error($name)
   <p class="text-xs text-red-500 font-semibold">{{ $name }} {{ $message }}</p>
@enderror
