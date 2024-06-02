

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 mx-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $detailPost['title'] }}</h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $detailPost['author'] }}</a> | januari 2024
        </div>

        <p class="my-4 font-light">{{ $detailPost['body'] }}</p>

        <a href="/post" class="font-medium text-blue-500 hover:underline">&laquo; Back to post</a>
    </article>


</x-layout>  