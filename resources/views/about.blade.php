<x-layout>
	{{-- //slot from this page only --}}
		{{-- @slot('title', 'About') --}}
	{{-- slot from route --}}
	<x-slot:title>{{ $title }}</x-slot:title>
	<h3 class="text-xl">About Me</h3>
	<h4>Author: {{$name}}</h4>
</x-layout>

