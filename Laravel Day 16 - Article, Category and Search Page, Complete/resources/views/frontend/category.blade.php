<x-frontend-layout title="{{ $category->meta_title }}">
    <section class="py-8">
        <div class="container grid md:grid-cols-3 gap-8">
            <div class="md:col-span-2 space-y-6">
                <h1 class="border-b-7 border-(--primary) text-3xl">
                    <strong class="bg-(--primary) text-white px-3 py-2">
                        {{ $category->title }}
                    </strong>
                </h1>
                @foreach ($category->articles()->latest()->get() as $article)
                    <a href="{{ route('article', $article->slug) }}" class="card grid grid-cols-3 items-center gap-2 overflow-hidden">
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
                @endforeach
            </div>

            <div class="mt-9 flex flex-col gap-6">
                @foreach ($advertises as $advertise)
                <a href="{{$advertise->redirect_link}}" target="_blank">
                    <img class="w-full" src="{{asset(Storage::url($advertise->banner))}}" alt="{{$advertise->company_name}}">
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
