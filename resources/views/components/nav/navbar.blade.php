<header class="flex flex-row justify-center  py-10 ">
    <nav class=" flex flex-row justify-between gap-x-32">

        <div class="flex flex-row">
            <h1 class="mx-0 px-4">
                <x-nav.navbarlink class=" px-4" href="{{route('homepage')}}" :active="Route::is('homepage')">
                    Homepage
                </x-nav.navbarlink>
            </h1>
            <h1 class="mx-0 px-4">
                <x-nav.navbarlink class="px-4" href="{{route('blogposts.index')}}" :active="Route::is('all.blogs')">All
                    blogs
                </x-nav.navbarlink>
            </h1>
            <h1 class="mx-0 px-4">
                <x-nav.navbarlink class="px-4" href="{{route('about.us')}}" :active="Route::is('about.us')">About us
                </x-nav.navbarlink>
            </h1>
        </div>
        <div class="flex">
            <h1 class="mx-0 px-4">
                <x-nav.navbarlink class=" px-4" href="{{route('login')}}" :active="Route::is('login')">
                    Login
                </x-nav.navbarlink>
            </h1>
            <h1 class="mx-0 px-4">
                <x-nav.navbarlink class=" px-4" href="{{route('register')}}" :active="Route::is('register')">
                    Register
                </x-nav.navbarlink>
            </h1>
        </div>
    </nav>
</header>

