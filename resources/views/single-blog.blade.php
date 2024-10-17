<?php
$singleBlog = $blogpost
?>
<x-layout>
    <x-main-layout>
        <article class="w-full flex  gap-x-32">
            <img class="w-1/3 h-1/3 " src="  {{asset('storage/' . $singleBlog->image) }}"
                 alt=""> {{-- Haal de afbeelding path op uit de database --}}
            <div class="flex flex-col justify-evenly">
                <div>
                    <h2>{{$singleBlog->title }}</h2> {{-- Haal de gegevens op uit de database van het boek--}}
                    <h5>{{$singleBlog->description}}</h5> {{-- Haal de gegevens op uit de database van het boek--}}
                    @foreach($singleBlog->genres as $genre)
                        <h5>{{$genre->name}}</h5>
                    @endforeach

                </div>
                <div>
                    <x-nav.navbarlink href="{{route('blogposts.index')}}">Ga terug naar alle blogs</x-nav.navbarlink>
                </div>
            </div>
        </article>
    </x-main-layout>
</x-layout>
