<x-layout>
    <h1>All blogs</h1>
    <main>
        <section>
            <article>
                <img src="" alt=""> {{-- Haal de afbeelding path op uit de database --}}
                <h2>Titel van het boek </h2> {{-- Haal de gegevens op uit de database van het boek--}}
                <h5>Korte omschrijving van het boek</h5> {{-- Haal de gegevens op uit de database van het boek--}}
                <x-nav.navbarlink href="{{route('single.blog',1)}}">Ga terug naar alle blogs</x-nav.navbarlink>
            </article>
        </section>
    </main>
</x-layout>
