<x-layout>
    <x-main-layout>
        <article class="w-full flex  gap-x-32">
            <img class="w-1/3 h-1/3 " src="  {{asset('storage/' . $singleBlog->image) }}" alt="">
            <div class="flex flex-col justify-evenly">
                <div>
                    <h2>{{$singleBlog->title }}</h2>
                    <h5>{{$singleBlog->description}}</h5>
                    @foreach($singleBlog->genres as $genre)
                        <h5>{{$genre->name}}</h5>
                    @endforeach

                </div>
                <h1>The article is written by {{$singleBlog->user->name}}</h1>
                <div>
                    @if(auth()->check() && auth()->user()->role === 'admin')
                        <a class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
                           href="{{route('admin.all.blogs.overview')}}">Ga terug naar all blogs overview
                        </a>
                    @else
                        <a
                            class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
                            href="{{route('blogposts.index')}}">Ga terug naar alle blogs
                        </a>
                    @endif
                </div>
            </div>
        </article>
    </x-main-layout>
</x-layout>
