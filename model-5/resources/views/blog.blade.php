<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
        <article class="border-b border-gray-300 py-8 max-w-screen-md">
            <a href="/post/{{ $post['id'] }}" class="hover:underline">
                <h2 class="text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | {{ $post['tanggal'] }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 150) }}
            </p>
            <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:text-blue-700 hover:underline">Read
                more
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
