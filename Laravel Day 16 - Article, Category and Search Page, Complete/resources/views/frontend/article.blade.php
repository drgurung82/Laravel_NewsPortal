<x-frontend-layout title="{{ $article->meta_title }}" meta_description="{{ $article->meta_description }}" meta_keywords="{{ $article->meta_keywords}}"" image="{{ asset(Storage::url($article->image)) }}">
    <section class="py-8">
        <div class="container grid md:grid-cols-3 gap-8">
            <div class="md:col-span-2 space-y-6">
                <div>
                    <span>
                        प्रकाशित मितिः <span id="c_date"></span>
                    </span>
                </div>
                <h1 class="border-b-7 border-(--primary) text-3xl">
                    <strong class="bg-(--primary) text-white px-3 py-2">
                        {{ $article->title }}
                    </strong>
                </h1>

                <img src="{{  asset(Storage::url($article->image))}}" alt="{{$article->title  }}">

                <div class="text-2xl">
                    {!! $article->description !!}
                </div>

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


    @push('scripts')
    <script>
        const c_date = document.getElementById('c_date');
        const adDate = new Date("{{ $article->created_at->format('Y-m-d H:i:s') }}");
        const c_nep = NepaliCalendar.adToBs(adDate);
        const c_nep_date = NepaliCalendar.formatBs(c_nep, 'ne');
        c_date.innerHTML = c_nep_date;
    </script>
    @endpush
</x-frontend-layout>
