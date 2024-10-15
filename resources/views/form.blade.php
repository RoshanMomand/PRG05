@vite(['resources/css/app.css', 'resources/js/app.js'])

<form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
      action="{{route('form.request')}}" method="post">
    @csrf
    {{--
     https://laravel.com/docs/11.x/csrf //  Cross site request frogeries. Beschermt tegen SQL injecties van 3e partijen.
     In plaats van bij elke input veld dit in te voeren kan je dit in de form stoppen en wordt alles beschermd
     --}}
    <div class="flex flex-col">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
    </div>

    <div class="flex flex-col">
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>

    <div class="flex flex-col">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*">
    </div>

    {{--    <div class="flex flex-col">--}}
    {{--        <label for="status">Status:</label>--}}
    {{--        <select id="status" name="status">--}}
    {{--            <option value="draft">Draft</option>--}}
    {{--            <option value="published">Published</option>--}}
    {{--        </select>--}}
    {{--    </div>--}}

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
