@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-layout>
    <form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
          action="{{ route('blogposts.update',$blogpost->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{$blogpost->title}}">
        </div>

        <div class="flex flex-col">
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{$blogpost->description}}</textarea>
        </div>

        <div class="flex flex-col">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            <ul>Dit zijn je huidige genres
                @if(!empty($blogpost->genres->name))
                    <li>Pick a genre please</li>
                @else
                    @foreach($blogpost->genres as $genre)
                        <li>{{$genre->name}}</li>
                    @endforeach
                @endif
            </ul>
            <label for="genre">Genre:</label>
            <select id="genre" name="genres[]" multiple>
                @foreach($genreValues as $genreValue)
                    <option value="{{$genreValue->id}}" name="name">{{$genreValue->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col">
            <label for="status">Status:</label>
            <select id="status" name="status">
                @if($blogpost->status === 1)
                    <option value="0">0</option>
                    <option value="1" selected>{{$blogpost->status}}</option>

                @else
                    <option value="0" selected>{{$blogpost->status}}</option>
                    <option value="1">1</option>
                @endif
            </select>
        </div>
        <button class="bg-black text-white hover:bg-gray-700 hover:text-black p-5" type="submit">Submit</button>
    </form>
</x-layout>
