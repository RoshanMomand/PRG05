<x-layout>
    <h1>All blogs</h1>
    <main>
        <section>
            @foreach($allBlogs as $blog)
                <x-article-layout :blog="$blog">
                </x-article-layout>
            @endforeach
            <div class="flex content-evenly justify-center p-4 mt-4  m-auto border-2 border-black w-1/4">
                <x-nav.navbarlink href="{{route('blogposts.create')}}" class="align-middle">Add new Blog
                </x-nav.navbarlink>
            </div>
        </section>
    </main>
</x-layout>
