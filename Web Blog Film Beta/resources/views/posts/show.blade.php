<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-light antialiased">
    <x-app-layout :title="$post->title">
        <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
            <img class="w-full my-2 rounded-lg" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
            <h1 class="text-4xl font-bold text-left text-gray-800">
                {{ $post->title }}
            </h1>
            <div class="mt-2 flex justify-between items-center">
                <div class="flex py-5 text-base items-center">
                    <x-posts.author :author="$post->author" size="md"/>
                    <span class="text-gray-500 text-sm">| {{ $post->getReadingTime() }} ment baca</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-500 mr-2">{{ $post->published_at->diffForHumans() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                        stroke="currentColor" class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <div
                class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-gray-100 py-4 px-2">
                <div class="flex items-center">
                    <livewire:like-button :key="'likebutton' . $post->id" :$post />
                </div>
                <div>
                    <div class="flex items-center">

                    </div>
                </div>
            </div>

            <div class="article-content py-3 prose text-gray-800 text-lg text-justify">
                {!! $post->body !!}
            </div>

            <div class="flex items-center space-x-4 mt-10">
                @foreach ($post->categories as $category)
                <x-posts.category-badge :category="$category" />
                @endforeach
            </div>

            <livewire:post-comments :key="'comments' . $post->id" :$post/>
        </article>
    </x-app-layout>
</body>
