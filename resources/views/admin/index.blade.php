<x-layout>
    <div class="flex flex-col items-center gap-y-32">
        <div>
            <h1>Welcome to the Admin Page</h1>
        </div>
        <div class="flex gap-36">
            <a class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"
               href="{{route('admin.all.blogs.overview')}}">All Blogs
                Table overview
            </a>
            <a class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"
               href="{{route('admin.all.genres.overview')}}">All Genres
                Table overview
            </a>

            <a class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"
               href="{{route('admin.all.users.overview')}}">All Users
                Table overview
            </a>
        </div>
    </div>
</x-layout>
