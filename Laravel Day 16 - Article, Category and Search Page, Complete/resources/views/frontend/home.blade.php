<x-frontend-layout>

    <section class="py-8">
        <div class="container">
            <div class="card p-6">
                <h1 class="text-6xl text-center leading-[1.5] font-semibold mb-2 mt-2">{{ $latest_article->title }}</h1>
                <a href="{{ route('article', $latest_article->slug) }}">
                    <img class="w-full" src="{{ asset(Storage::url($latest_article->image)) }}"
                    alt="{{ $latest_article->title }}">
                </a>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container space-y-8">
            @foreach ($categories as $category)
                @if (count($category->articles) > 0)
                    <div>
                        <h2 class="text-3xl border-l-4 py-4 border-(--primary) pl-3 pr-3 font-semibold">
                            {{ $category->title }}</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                            @foreach ($category->articles()->latest()->limit(6)->get() as $article)
                                <a href="{{ route('article', $article->slug) }}"
                                    class="card grid grid-cols-3 items-center gap-2 overflow-hidden">
                                    <img class="h-[140px] w-full object-cover"
                                        src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                                    <div class="col-span-2">
                                        <h3 class="text-xl font-semibold line-clamp-2">{{ $article->title }}</h3>
                                        <div class="line-clamp-2">
                                            {!! $article->description !!}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

</x-frontend-layout>
