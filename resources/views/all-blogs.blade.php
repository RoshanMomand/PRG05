<x-layout>
    <x-main-layout>
        <h1 class="text-center text-4xl">{{ __('All Blogs') }}</h1>
        <form action="{{route('blogposts.search')}}" method="get">

            <label for="search">Find the genre you want</label>
            <input type="search" id="search" name="search">
            <div>
                {{--                <select id="genre" multiple>--}}
                @foreach($allGenres as $genre)
                    <input id="genre-{{$genre->id}}" type="checkbox" name="genres[]" value="{{$genre->id}}"> </input>
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
