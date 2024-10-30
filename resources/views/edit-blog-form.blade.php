@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-layout>
    <form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
          action="{{ route('blogposts.update',$blogpost->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="flex flex-col ">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{$blogpost->title}}">
        </div>

        <div class="flex flex-col items-center gap-x-24">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="6" cols="50"
                      class="rounded-2xl">{{$blogpost->description}}</textarea>
        </div>

        <div class="flex flex-col">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            <ul>Dit zijn je huidige genres
                @if($blogpost->genres->isEmpty())
                    <li>Pick a genre please</li>
                @else
                    @foreach($blogpost->genres as $genre)
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
        @if ($errors->userUpdateBlog->any())
            <div class="alert alert-danger text-white text-2xl">
                <ul>
                    @foreach ($errors->userUpdateBlog->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class=" flex flex-row items-center gap-x-24">
            <a
                class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-1 sm:px-5 sm:py-2.5"
                href="{{route('blogposts.index')}}">Ga terug naar alle blogs
            </a>

            <button
                class="bg-cyan-700 hover:bg-cyan-400 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-1 sm:px-5 sm:py-2.5"
                type="submit">Submit
            </button>
        </div>
    </form>
</x-layout>
