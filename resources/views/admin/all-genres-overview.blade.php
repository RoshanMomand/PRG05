<x-layout>

    <div class="bg-white shadow rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">All Genre overview</h3>
            <div class="flex items-center justify-end gap-3 mt-4">
                <div>
                    <a class="bg-black hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5 "
                       href="{{route('admin.index')}}">Terug naar de index
                        pagina</a>
                </div>
                <div>
                    <a href="{{route('admin.create.genre')}}"
                       class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5">Add
                        new Genre</a>
                </div>
            </div>
            <div class="mt-5 flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Created
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Updated
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">EDIT</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($allGenres as $genre)
                                    <tr>
                                        <td>{{$genre->id}}</td>
                                        <td>{{$genre->name}}</td>
                                        <td>{{$genre->created_at}}</td>
                                        <td>{{$genre->updated_at}}</td>
                                        <td>
                                            <form action="{{route('admin.delete.genre',$genre->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
                                                    type="submit">
                                                    Delete this genre
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
