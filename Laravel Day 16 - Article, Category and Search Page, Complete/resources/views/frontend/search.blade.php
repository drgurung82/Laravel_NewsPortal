<x-frontend-layout title="Search for {{ $query}}">
    <section class="py-8">
        <div class="container grid md:grid-cols-3 gap-8">
            <div class="md:col-span-2 space-y-6">
                <h1 class="border-b-7 border-(--primary) text-3xl">
                    <strong class="bg-(--primary) text-white px-3 py-2">
                        Result for {{ $query }}
                    </strong>
                </h1>
                @forelse ($articles as $article)
                    <a href="{{ route('article', $article->slug) }}"
                        class="card grid grid-cols-3 items-center gap-2 overflow-hidden">
                        <img class="w-full h-full object-cover transition-transform duration-500
                        origin-center hover:scale-110"
                            src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                        <div class="col-span-2 p-6">
                            <h3 class="text-2xl font-semibold line-clamp-2 pb-5">{{ $article->title }}</h3>
                            <div class="line-clamp-5 text-xl">
                                {!! $article->description !!}
                            </div>
                        </div>
                    </a>
                @empty

                    <p class="text-gray-500 text-3xl border-l-4 border-(--primary) pl-3 font-semibold">
                        No articles found for "{{ $query }}".
                    </p>
                @endforelse
            </div>

            <div class="mt-9 flex flex-col gap-6">
                @foreach ($advertises as $advertise)
                    <a href="{{ $advertise->redirect_link }}" target="_blank">
                        <img class="w-full" src="{{ asset(Storage::url($advertise->banner)) }}"
                            alt="{{ $advertise->company_name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
