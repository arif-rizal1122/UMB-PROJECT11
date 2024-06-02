

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($post as $p)
    <article class="py-8 mx-w-screen-md border-b border-gray-300">

        <a href="/post/{{ $p['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $p['title'] }}</h2>
        </a>

        <div class="text-base text-gray-500">
            <a href="#">{{ $p['author'] }}</a> | januari 2024
        </div>

        <p class="my-4 font-light">{{ substr($p['body'], 0, 100) }}{{ strlen($p['body']) > 100 ? '...' : '' }}</p>

        <a href="/post/{{ $p['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>

    </article>

    @endforeach

</x-layout>  