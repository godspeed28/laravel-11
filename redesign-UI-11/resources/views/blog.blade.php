<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Search form --}}
    <form action="/blog" method="GET" class="mb-6">
        <input type="text" name="search" placeholder="Search posts..." value="{{ request('search') }}"
            class="border px-4 py-2 rounded-md w-1/3">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Search</button>
    </form>

    {{-- Pagination --}}
    <div class="mt-8">
        {{ $posts->links() }}
    </div>


    <div
        class="mb-10 mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($posts as $post)
            <article class="flex max-w-xl border-r  border-gray-300 flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                    <a href="/author/{{ $post->author->id }}" class="hover:underline">
                        {{ $post->author->name }}
                    </a>
                    <a href="/category/{{ $post->category->slug }}"
                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->name }}</a>
                    <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                </div>
                <div class="mb-3 group relative grow">
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <a href="/post/{{ $post['slug'] }}" class="hover:underline">
                            <span class="absolute inset-0"></span>
                            {{ $post['title'] }}
                        </a>
                    </h3>
                    <p class=" mt-5 line-clamp-3 text-sm/6 text-gray-600">
                        {{ Str::limit($post['body'], 150) }}
                    </p>
                </div>
                <a href="/post/{{ $post['slug'] }}"
                    class="font-medium text-blue-500 hover:text-blue-700 hover:underline">Read
                    more &raquo;</a>
            </article>
        @endforeach
    </div>




</x-layout>
