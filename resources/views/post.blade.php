<x-layout>
	{{-- @slot('title', 'Single Post') --}}

	<x-slot:title>{{ $title }}</x-slot:title>

	<article class="py-8 max-w-screen-md">
		<h2 class="mb-1 text-3xl tracking-tight font-bold text-slate-900">{{ $post->title }}</h2>
		<div class="text-base text-slate-600 inline-block"><a href="/authors/{{ $post->author->id }}">
						{{ $post->author->name }}">{{ $post->author }}</a></div> | {{ $post->created_at->diffForHumans() }}
		<p class="my-4 font-light">
			{{ $post->body }}
		</p>
		<a href="/posts" class="font-medium text-blue-500 hover:text-blue-800 hover:underline">&laquo; Back to posts </a>
	</article>

</x-layout>

