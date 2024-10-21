<?php
$singleBlog = $blogpost;
@dump($singleBlog->genres);
?>
<x-layout>
    <x-main-layout>
        <article class="w-full flex  gap-x-32">
            <img class="w-1/3 h-1/3 " src="  {{asset('storage/' . $singleBlog->image) }}" alt="">
            <div class="flex flex-col justify-evenly">
                <div>
                    <h2>{{$singleBlog->title }}</h2>
                    <h5>{{$singleBlog->description}}</h5>
                    @foreach($singleBlog->genres as $genre)
                        <h5>{{$genre->name}}</h5>
                    @endforeach

                </div>
                <h1>The article is written by {{$singleBlog->user->name}}</h1>
                <div>
                    <x-nav.navbarlink href="{{route('blogposts.index')}}">Ga terug naar alle blogs</x-nav.navbarlink>
                </div>
            </div>
        </article>
    </x-main-layout>
</x-layout>
