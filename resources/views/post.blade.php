<x-layout>
	{{-- @slot('title', 'Single Post') --}}

	<x-slot:title>{{ $title }}</x-slot:title>

	<article class="py-8 max-w-screen-md">
		<h2 class="mb-1 text-3xl tracking-tight font-bold text-slate-900">{{ $post->title }}</h2>
		<div>
			By
			<a class="hover:underline font-normal text-slate-500" href="/authors/{{ $post->author->id }}">{{ $post->author->username }}">{{ $post->author->name }}</a>
			in
			<a class="hover:underline font-normal text-slate-500" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
			| {{ $post->created_at->diffForHumans() }}
		</div>
		<p class="my-4 font-light">
			{{ $post->body }}
		</p>
		<a href="/posts" class="font-medium text-blue-500 hover:text-blue-800 hover:underline">&laquo; Back to posts </a>
	</article>

</x-layout>

