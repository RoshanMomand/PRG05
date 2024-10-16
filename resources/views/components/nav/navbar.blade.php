<header class="py-10 ">
    <nav>
        @guest
            <div class="flex justify-between px-20">
                <div class="flex ">
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('homepage')}}" :active="Route::is('homepage')">
                            Homepage
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('blogposts.index')}}"
                                          :active="Route::is('blogposts.index')">
                            All
                            blogs
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('about.us')}}" :active="Route::is('about.us')">
                            About us
                        </x-nav.navbarlink>
                    </h1>
                </div>
                <div class="flex">
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('login')}}" :active="Route::is('login')">
                            Login
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('register')}}" :active="Route::is('register')">
                            Register
                        </x-nav.navbarlink>
                    </h1>
                </div>
            </div>
        @endguest

        @auth
            <div class="flex justify-between px-20">
                <div class="flex ">
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('homepage')}}" :active="Route::is('homepage')">
                            Homepage
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('blogposts.index')}}" :active="Route::is('blogposts.index')">
                            All blogs
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('about.us')}}" :active="Route::is('about.us')">
                            About us
                        </x-nav.navbarlink>
                    </h1>
                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('profile.edit')}}" :active="Route::is('profile.edit')">
                            Profile
                        </x-nav.navbarlink>
                    </h1>

                    <h1 class="mx-0 px-4">
                        <x-nav.navbarlink href="{{route('blogposts.create')}}"
                                          :active="Route::is('blogposts.create')">
                            Create Blog
                        </x-nav.navbarlink>
                    </h1>
                </div>
                <div>
                    <h1 class="mx-0 px-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav.navbarlink type="submit" class="px-4">Log uit</x-nav.navbarlink>
                        </form>
                    </h1>
                </div>
            </div>
    @endauth
</header>

