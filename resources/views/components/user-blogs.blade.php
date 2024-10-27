<article class=" flex  flex-col justify-evenly  gap-5">
    <img class="w-2/3 h-3/6 object-cover object-top rounded-full"
         src="{{ asset('storage/'.$blog->image) }}" alt="test">
    <h2 class="m-0 p-0">{{$blog->title}}</h2>
    <h5 class="m-0">{{$blog->description}}</h5>
    <a class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
       href="{{route('blogposts.show',$blog->id)}}">Ga naar Blog</a>
    <form action="{{ route('blogposts.destroy', $blog -> id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button
            class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
            type="submit">Delete
        </button>
    </form>
    <a class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white font-medium rounded-md px-4 py-2 sm:px-5 sm:py-2.5"
       href="{{route('blogposts.edit',$blog->id)}}">
        Edit this post
    </a>
</article>

