<x-layout>
    <x-main-layout>
        <h1 class="text-center text-4xl">{{ __('All Blogs') }}</h1>
        <section class="grid-cols-4 grid gap-2 mx-2 my-4">
            @foreach($allBlogs as $blog)
                <x-article-layout :blog="$blog">
                </x-article-layout>
            @endforeach
        </section>
    </x-main-layout>
</x-layout>
