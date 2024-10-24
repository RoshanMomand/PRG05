<header class="py-10 ">
    <nav>
        <div class="flex justify-center px-40">
            @guest
                <div class="flex ">
                    <x-nav.navbarlink href="{{route('homepage')}}" :active="Route::is('homepage')">
                        <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> Homepage </h1>
                    </x-nav.navbarlink>
                    <x-nav.navbarlink href="{{route('blogposts.index')}}"
                                      :active="Route::is('blogposts.index')">
                        <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700">
                            All
                            blogs
                        </h1>
                    </x-nav.navbarlink>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('about.us')}}" :active="Route::is('about.us')">
                            <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> About us </h1>
                        </x-nav.navbarlink>
                    </h1>
                </div>
                <div class="flex">
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('login')}}" :active="Route::is('login')">
                            <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> Login </h1>
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('register')}}" :active="Route::is('register')">
                            <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> Register </h1>
                        </x-nav.navbarlink>
                    </h1>
                </div>
        </div>
        @endguest
        @auth
            <div class="flex gap-x-32">

                <x-nav.navbarlink href="{{route('homepage')}}" :active="Route::is('homepage')">
                    <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> Homepage </h1>
                </x-nav.navbarlink>

                <x-nav.navbarlink href="{{route('blogposts.index')}}"
                                  :active="Route::is('blogposts.index')">
                    <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700">
                        All
                        blogs
                    </h1>
                </x-nav.navbarlink>

                @if(auth()->user()->role === 'admin')

                    <x-nav.navbarlink href="{{route('admin.index')}}" :active="Route::is('admin.index')">
                        <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> Admin Panel </h1>
                    </x-nav.navbarlink>

                @endif
                <x-nav.navbarlink href="{{route('profile.edit')}}" :active="Route::is('profile.edit')">
                    <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700"> Profile </h1>
                </x-nav.navbarlink>


                <x-nav.navbarlink href="{{route('blogposts.create')}}"
                                  :active="Route::is('blogposts.create')">
                    <h1 class="bg-black text-white p-8 rounded-full hover:bg-indigo-700">Create Blog </h1>
                </x-nav.navbarlink>

                <div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav.navbarlink type="submit" class="px-4"><h1
                                class="bg-black text-white p-8 rounded-full hover:bg-indigo-700">Log uit </h1>
                        </x-nav.navbarlink>
                    </form>

                </div>
            </div>
        @endauth
    </nav>
</header>

