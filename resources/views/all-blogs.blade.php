<x-layout>
    <x-main-layout>
        <h1 class="text-center text-4xl">{{('All Blogs') }}</h1>
        <form action="{{route('blogposts.search')}}" method="get">
            <div class="flex flex-col items-center">
                <label for="search-term">Find the Blog you want</label>
                <input type="text" id="search-term" name="search-term" value="{{  request('search-term') }}">
            </div>
            <div class="flex flex-col items-center">
                {{--                <select id="genre" multiple>--}}
                <h2 class="text-2xl font-bold">Select one or multiple genres </h2>
                <div class="flex items-center gap-x-1">
                    @foreach($allGenres as $genre)
                        <input id="genre-{{$genre->id}}" type="checkbox" name="genres[]"
                               value="{{$genre->id}}" {{ in_array($genre->id, request('genres', [])) ? 'checked' : '' }}>
                        <label for="genre-{{$genre->id}}">{{$genre->name}}</label>
                    @endforeach
                </div>
                {{--                </select>--}}
            </div>
            <div class="flex flex-col items-center">
                <button class="bg-indigo-600 text-white hover:bg-indigo-300 hover:text-black p-5" type="submit">Find
                </button>
            </div>
        </form>
        <section class="grid-cols-4 grid gap-2 mx-2 my-4">

            @foreach($allBlogs as $blog)
                <x-article-layout :blog="$blog">
                </x-article-layout>
            @endforeach
        </section>
    </x-main-layout>
</x-layout>
