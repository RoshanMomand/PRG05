@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-layout>
    <form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
          action="{{ route('blogposts.store') }}" method="POST">
        @csrf
        {{--
        CSRF MOETTTT
         https://laravel.com/docs/11.x/csrf //  Cross site request frogeries. Beschermt tegen SQL injecties van 3e partijen.
         In plaats van bij elke input veld dit in te voeren kan je dit in de form stoppen en wordt alles beschermd
         --}}
        <div class="flex flex-col">
            <label for="title">Title:</label>
            <select id="title" name="title">
                <option value="">Kies een titel</option>
                <option value="mr">De heer</option>
                <option value="mrs">Mevrouw</option>
                <option value="miss">Juffrouw</option>
                <option value="dr">Dokter</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div class="flex flex-col">
            <label for="image_link">Image:</label>
            <input type="file" id="image_link" name="image_link">
        </div>

        <div class="flex flex-col">
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </div>
        {{--    <div class="flex flex-col">--}}
        {{--        <label for="created_at">Created at:</label>--}}
        {{--        <input type="datetime-local" id="created_at" name="created_at" readonly>--}}
        {{--    </div>--}}

        {{--    <div class="flex flex-col">--}}
        {{--        <label for="updated_at">Updated at:</label>--}}
        {{--        <input type="datetime-local" id="updated_at" name="updated_at" readonly>--}}
        {{--    </div>--}}

        <button class="bg-black text-white hover:bg-gray-700 hover:text-black p-5" type="submit">Submit</button>
    </form>
</x-layout>
