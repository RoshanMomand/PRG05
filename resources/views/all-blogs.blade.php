<x-layout>
    <x-main-layout>
        <h1 class="text-center text-4xl">{{ __('All Blogs') }}</h1>
        <form action="{{route('blogposts.search')}}" method="get">

            <div>
                <label for="search-term">Find the genre you want</label>
                <input type="text" id="search-term" name="search-term" value="{{  request('search-term') }}">
            </div>
            <div>
                {{--                <select id="genre" multiple>--}}
                @foreach($allGenres as $genre)
                    <input id="genre-{{$genre->id}}" type="checkbox" name="genres[]"
                           value="{{$genre->id}}" {{ in_array($genre->id, request('genres', [])) ? 'checked' : '' }}>
                    <label for="genre-{{$genre->id}}">{{$genre->name}}</label>
                @endforeach
                {{--                </select>--}}
            </div>
            <button type="submit">Find</button>
        </form>
        <section class="grid-cols-4 grid gap-2 mx-2 my-4">

            @foreach($allBlogs as $blog)
                <x-article-layout :blog="$blog">
                </x-article-layout>
            @endforeach
        </section>
    </x-main-layout>
</x-layout>
