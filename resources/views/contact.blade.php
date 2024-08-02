<x-layout>
	{{-- @slot('title', 'Contact') --}}

	<x-slot:title>{{ $title }}</x-slot:title>
	<h3 class="text-xl">Contact Me</h3>
	<ul>
			<li class="email">Email: arismetyogi@email.com</li>
			<li class="social">LinkedIn: <a href="https://www.linkedin.com/in/arismetyogi">arismetyogi.linkedin.com</a></li>
			<li class="github" >Github: <a href="https://www.github.com/arismetyogi">arismetyogi</a></li>
	</ul>
</x-layout>

