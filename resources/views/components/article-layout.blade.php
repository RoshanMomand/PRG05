@props(['blog'])
<article class="flex flex-col border-4 gap-2">
    <img src="" alt=""> {{-- Haal de afbeelding path op uit de database --}}
    <h2>{{$blog->title}}</h2> {{-- Haal de gegevens op uit de database van het boek--}}
    <h5>{{$blog->description}}</h5> {{-- Haal de gegevens op uit de database van het boek--}}
    <x-nav.navbarlink href="{{route('blogposts.show',$blog->id)}}">
        Ga naar Blog
        <br>{{$blog->title}}
    </x-nav.navbarlink>
</article>

