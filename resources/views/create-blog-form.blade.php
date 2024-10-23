@vite(['resources/css/app.css', 'resources/js/app.js'])
@dump($genreValues)
<x-layout>
    <form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
          action="{{ route('blogposts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="flex flex-col">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{old('title')}}">
        </div>

        <div class="flex flex-col">
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{old('description')}}</textarea>
        </div>

        <div class="flex flex-col">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            <label for="genre">Genre:</label>
            <select id="genre" name="genres[]" multiple>
                @foreach($genreValues as $genreValue)
                    <option value="{{$genreValue->id}}">{{$genreValue->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col">
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </div>

        <button class="bg-black text-white hover:bg-gray-700 hover:text-black p-5" type="submit">Submit</button>
    </form>
</x-layout>
