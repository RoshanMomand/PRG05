@props(['blog'])



@if(isset(auth()->user()->id) && $blog->user_id === auth()->user()->id)
    <article class=" flex  flex-col justify-evenly items-center gap-5">
        <img class="w-3/4 " src="{{ asset('storage/'.$blog->image) }}"
             alt="test">
        <h2 class="m-0 p-0">{{$blog->title}}</h2>
        <h5 class="m-0">{{$blog->description}}</h5>
        <x-nav.navbarlink class="m-0" href="{{route('blogposts.show',$blog->id)}}">
            Ga naar Blog {{$blog->title}}

        </x-nav.navbarlink>
        <form action="{{ route('blogposts.destroy', $blog -> id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <x-nav.navbarlink href="{{route('blogposts.edit',$blog->id)}}">
            Edit this post
        </x-nav.navbarlink>
    </article>
@else
    <article class=" flex  flex-col justify-evenly items-center gap-5">

        <img class="w-3/4 " src="{{ asset('storage/'.$blog->image) }}" alt="test">
        <h2 class="m-0 p-0">{{$blog->title}}</h2>
        <h5 class="m-0">{{$blog->description}}</h5>
        <x-nav.navbarlink class="m-0" href="{{route('blogposts.show',$blog->id)}}">Ga naar Blog {{$blog->title}}
        </x-nav.navbarlink>

    </article>

@endif

