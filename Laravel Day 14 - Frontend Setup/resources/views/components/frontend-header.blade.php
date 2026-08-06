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
                    <a href="/"
                        class="{{ request()->is('/') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        <i class="fa-solid fa-house mr-1"></i>गृहपृष्ठ
                    </a>
                </li>

                <li>
                    <a href="/news"
                        class="{{ request()->is('news') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        समाचार
                    </a>
                </li>

                <li>
                    <a href="/entertainment"
                        class="{{ request()->is('entertainment') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        मनोरञ्जन
                    </a>
                </li>

                <li>
                    <a href="/sports"
                        class="{{ request()->is('sports') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        खेलकुद
                    </a>
                </li>

                <li>
                    <a href="/thoughts"
                        class="{{ request()->is('thoughts') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        विचार
                    </a>
                </li>

                <li>
                    <a href="/education"
                        class="{{ request()->is('education') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        शिक्षा
                    </a>
                </li>

                <li>
                    <a href="/health"
                        class="{{ request()->is('health') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        स्वास्थ्य
                    </a>
                </li>

                <li>
                    <a href="/economy"
                        class="{{ request()->is('economy') ? 'text-orange-500 border border-orange-500 px-2 py-1 rounded-md' : 'hover:text-orange-500' }}">
                        अर्थतन्त्र
                    </a>
                </li>

            </ul>


            <!-- Search -->
            <div>
                <form action="#" method="get">
                    <div class="relative">

                        <input type="text" name="q" placeholder="Search..."
                            class="w-32 sm:w-44 lg:w-52 bg-white text-gray-700 px-3 py-2 rounded-md text-sm outline-none">

                        <button type="submit" class="absolute right-3 top-2.5">
                            <i class="fa-solid fa-magnifying-glass" style="color: rgb(255,118,24);"></i>
                        </button>

                    </div>
                </form>
            </div>


    </nav>

</header>
