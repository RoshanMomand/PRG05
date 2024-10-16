@dump($blogpost)
<x-layout>
    <article>
        <img src="" alt=""> {{-- Haal de afbeelding path op uit de database --}}
        <h2></h2> {{-- Haal de gegevens op uit de database van het boek--}}
        <h5>Korte omschrijving van het boek</h5> {{-- Haal de gegevens op uit de database van het boek--}}
        <x-nav.navbarlink href="{{route('blogposts.index')}}">Ga terug naar alle blogs</x-nav.navbarlink>
    </article>
</x-layout>
