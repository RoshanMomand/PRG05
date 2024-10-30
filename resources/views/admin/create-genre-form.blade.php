<x-layout>
    <div class="bg-white shadow rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Voeg een nieuw Genre toe</h3>
            <div class="mt-5">
                <form action="{{ route('admin.store.new.genre') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Genre naam</label>
                        <input type="text" id="name" name="name"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    @if ($errors->addingGenreForm->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->addingGenreForm->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="flex items-center justify-end gap-3 mt-4">
                        <div>
                            <a class="bg-black hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
                               href="{{ route('admin.index') }}">Terug naar de index pagina</a>
                        </div>
                        <div>
                            <button type="submit"
                                    class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5">
                                Voeg Genre toe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
