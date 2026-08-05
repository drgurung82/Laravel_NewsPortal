<header class="sticky top-0 bg-purple-100 z-20">
    <div class="container flex justify-between items-center">
        <img class="h-16" src="{{ asset('frontend/images/logo.png') }}" alt="Logo">

        <div>
            <span id="date" class="text-xl font-bold text-[purple]"></span>
            <img class="h-3" src="{{ asset('frontend/images/line.png') }}" alt="Line">
        </div>
    </div>


    <div>
        <nav class="bg-[purple] h-16 ">
            <div class="w-[80%] mx-auto h-full flex items-center justify-between">
                <ul class="hidden lg:flex gap-8 text-2xl text-[white]">
                <li><a href="{{ route('home') }}" class="hover:text-orange-600">गृहपृष्ठ</a></li>
                <li><a href="{{ route('news') }}" class="hover:text-orange-600">समाचार</a></li>
                <li><a href="{{ route('entertainment') }}" class="hover:text-orange-600">मनोरञ्जन</a></li>
                <li><a href="{{ route('sports') }}" class="hover:text-orange-600">खेलकुद</a></li>
                <li><a href="{{ route('thoughts') }}" class="hover:text-orange-600">विचार</a></li>
                <li><a href="{{ route('education') }}" class="hover:text-orange-600">शिक्षा</a></li>
                <li><a href="{{ route('health') }}" class="hover:text-orange-600">स्वास्थ्य</a></li>
                <li><a href="{{ route('economy') }}" class="hover:text-orange-600">अर्थतन्त्र</a></li>
            </ul>
            </div>
        </nav>
    </div>
</header>
