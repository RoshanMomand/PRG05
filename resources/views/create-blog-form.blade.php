@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-layout>
    @if($userLogins->count() >= 3 || auth()->user()->role ==='admin')
        <form class="my-40 mx-40 flex flex-col items-center gap-y-3 border-4 border-black"
              action="{{ route('blogposts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{old('title')}}">
            </div>

            <div class="flex flex-col">
                <label for="description">Description:</label>
                <textarea id="description" rows="5" cols="50" name="description">{{old('description')}}</textarea>
            </div>

            <div class="flex flex-col">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
            </div>

            <div class="flex flex-col">
                <label for="genre">Genre:</label>
                <select id="genre" name="genres[]" multiple>
                    @foreach($genreValues as $genreValue)
                        <option value="{{$genreValue->id}}">{{$genreValue->name}}</option>
                    @endforeach
                </select>
            </div>
            @if ($errors->userCreateErrors->any())
                <div class="alert alert-danger text-white text-2xl">
                    <ul>
                        @foreach ($errors->userCreateErrors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button class="bg-black text-white hover:bg-gray-700 hover:text-black p-5" type="submit">Submit</button>
        </form>
    @else
        <div class=" flex flex-col gap-y-24 text-center text-2xl">
            <h1>Je moet eerst 3x ingelogd zijn</h1>
            <h2>Je moet nog {{ 3 - $userLogins->count() }} keer inloggen om een blog te kunnen maken.</h2>
            <div>
                <a class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
                   href="{{route('blogposts.index')}}"> Terug naar homepage</a>
            </div>
        </div>
    @endif
</x-layout>
