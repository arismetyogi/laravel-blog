<x-layout>
    {{-- @slot('title', 'Blog') --}}

	<x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-xl">Welcome to My Blog</h3>

		@foreach ( $posts as $post )
			<article class="py-8 max-w-screen-md border-b border-slate-300">
				<h2 class="mb-1 text-3xl tracking-tight font-bold text-slate-900">
					<a class="hover:underline hover:text-slate-600" href="/posts/{{ $post->slug }}">
						{{ $post['title'] }}
					</a>
				</h2>
				<div class="text-base text-slate-600 inline-block">
					<a class="hover:underline" href="/authors/{{ $post->author->id }}">
						{{ $post->author->name }}
						</a>
						| {{ $post->created_at->diffForHumans() }}
				</div>
				<p class="my-4 font-light">
					{{-- limit jumlah karakter yang dimunculkan pada post --}}
					{{ Str::limit($post->body, 150) }}
				</p>
				<a href="/posts/{{ $post->slug }}" class="font-medium text-blue-500 hover:text-blue-800 hover:underline">Read more &raquo;</a>
			</article>
		@endforeach

	</x-layout>

