<header class="sticky top-0 bg-purple-100 z-20 border-b-5 border-purple-200 shadow-lg">
    <div class="container flex justify-between items-center py-4">
        <img class="h-10 md:h-25" src="{{ asset('frontend/images/logo.png') }}" alt="logo">

        <div>
            <span id="date" class="text-xl font-bold text-[purple]"></span>
            <img class="h-2 md:h-4" src="{{ asset('frontend/images/line.png') }}" alt="line">
        </div>
    </div>



    <nav class="bg-(--primary) text-white">
        <div class="w-[95%] lg:w-[80%] mx-auto flex justify-between items-center py-4">

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex items-center gap-6 text-xl xl:text-2xl">

                <li>
                    <a href="{{ route('home') }}"
                        class="{{ request()->is('/') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        <i class="fa-solid fa-house mr-1"></i>गृहपृष्ठ
                    </a>
                </li>

                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('category', $category->slug) }}" class="hover:text-orange-500">
                            {{ $category->title }}
                        </a>
                    </li>
                @endforeach

            </ul>


            <!-- Search -->
            <div>
                <form action="{{route('search')}}" method="get">
                    <div class="relative">

                        <input type="text" name="q" placeholder="Search..."
                            class="w-32 sm:w-44 lg:w-52 bg-white text-gray-700 px-3 py-2 rounded-md text-sm outline-none">

                        <button type="submit" class="absolute right-3 top-2.5">
                            <i class="fa-solid fa-magnifying-glass fa-beat-fade" style="color: rgb(255,118,24);"></i>
                        </button>

                    </div>
                </form>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-xl" type="button" data-drawer-target="nav-drawer" data-drawer-show="nav-drawer"
                    aria-controls="nav-drawer">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

        </div>


    </nav>

</header>


<!-- drawer component -->
<div id="nav-drawer"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-neutral-primary-soft w-96 border-e border-default"
    tabindex="-1" aria-labelledby="drawer-label">
    <div class="border-b border-default pb-4 mb-5 flex items-center">
        <h5 id="drawer-label" class="inline-flex items-center text-lg font-medium text-body">
            <svg class="w-5 h-5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Menu
        </h5>
        <button type="button" data-drawer-hide="nav-drawer" aria-controls="nav-drawer"
            class="text-body bg-transparent hover:text-heading hover:bg-neutral-tertiary rounded-base w-9 h-9 absolute top-2.5 end-2.5 flex items-center justify-center">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>


    <div class="flex flex-col gap-6 text-xl">

        <ul>

            <li>
                <a href="/">गृहपृष्ठ</a>
            </li>

            <li>
                <a href="/category/news">समाचार</a>
            </li>

            <li>
                <a href="/category/entertainment">मनोरञ्जन</a>
            </li>

            <li>
                <a href="/category/sports">खेलकुद</a>
            </li>

            <li>
                <a href="/category/thoughts">विचार</a>
            </li>

            <li>
                <a href="/category/education">शिक्षा</a>
            </li>

            <li>
                <a href="/category/health">स्वास्थ्य</a>
            </li>

            <li>
                <a href="/category/economy">अर्थतन्त्र</a>
            </li>

        </ul>

    </div>

</div>
