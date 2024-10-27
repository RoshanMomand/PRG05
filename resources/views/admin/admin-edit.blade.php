@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-layout>
    <form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
          action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{$admin->title}}">
        </div>

        <div class="flex flex-col">
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{$admin->description}}</textarea>
        </div>

        <div class="flex flex-col">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            <ul>Dit zijn je huidige genres
                @if($admin->genres->isEmpty())
                    <li>Pick a genre please</li>
                @else
                    @foreach($admin->genres as $genre)
                        <li>{{$genre->name}}</li>
                    @endforeach
                @endif
            </ul>
            <label for="genre">Genre:</label>
            <select id="genre" name="genres[]"
                    multiple>
                @foreach($genreValues as $genreValue)
                    <option value="{{$genreValue->id}}"
                            name="genres[]">{{$genreValue->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="bg-black text-white hover:bg-gray-700 hover:text-black p-5" type="submit">Submit</button>
    </form>
</x-layout>
