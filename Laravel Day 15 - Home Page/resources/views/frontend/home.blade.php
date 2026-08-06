<x-frontend-layout>

    <section class="py-8">
        <div class="container">
            <div class="card p-6">
                <h1 class="text-6xl text-center leading-[1.5] font-semibold mb-2 mt-2">{{ $latest_article->title }}</h1>
                <img class="w-full" src="{{ asset(Storage::url($latest_article->image)) }}"
                    alt="{{ $latest_article->title }}">
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container space-y-8">
            @foreach ($categories as $category)
                @if (count($category->articles) > 0)
                    <div>
                        <h2 class="text-3xl border-l-4 py-4 border-(--primary) pl-3 pr-3 font-semibold">{{ $category->title }}</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                            @foreach ($category->articles()->latest()->limit(6)->get() as $article)
                                <div class="card grid grid-cols-3 items-center gap-2 overflow-hidden">
                                    <img class="h-[140px] w-full object-cover"
                                        src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                                    <div class="col-span-2">
                                        <h3 class="text-xl font-semibold line-clamp-2">{{ $article->title }}</h3>
                                        <div class="line-clamp-2">
                                            {!! $article->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <section class="p-5 bg-purple-50">
        <h1 class="text-4xl text-[purple] text-center mt-10 pb-10">Welcome to Laravel Project "News Portal" -
            "जवाफ_डिजिटल पत्रिका"</h1>


        <div class="container p-5 border border-gray-200 rounded-lg shadow-md">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo doloremque magni voluptate aliquam
                odio,
                soluta maxime nam recusandae iure beatae tempora quisquam voluptas ut sequi velit ipsum sit
                repellendus
                temporibus! Saepe perspiciatis totam harum, similique consectetur optio hic corrupti vero ab quas
                eius,
                beatae aliquam earum minima repellat maxime pariatur amet magni id, commodi minus iste dignissimos
                perferendis quia. Deleniti ex modi rem maxime nesciunt ipsum, fugiat ratione, accusamus voluptatum,
                obcaecati numquam sit iste! Similique sunt debitis itaque, dolore placeat ea aliquid maiores
                recusandae.
                Quibusdam quae ut enim iusto earum officia, cum atque aliquam ducimus corrupti fugiat, quia
                exercitationem
                eius.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo doloremque magni voluptate aliquam
                odio,
                soluta maxime nam recusandae iure beatae tempora quisquam voluptas ut sequi velit ipsum sit
                repellendus
                temporibus! Saepe perspiciatis totam harum, similique consectetur optio hic corrupti vero ab quas
                eius,
                beatae aliquam earum minima repellat maxime pariatur amet magni id, commodi minus iste dignissimos
                perferendis quia. Deleniti ex modi rem maxime nesciunt ipsum, fugiat ratione, accusamus voluptatum,
                obcaecati numquam sit iste! Similique sunt debitis itaque, dolore placeat ea aliquid maiores
                recusandae.
                Quibusdam quae ut enim iusto earum officia, cum atque aliquam ducimus corrupti fugiat, quia
                exercitationem
                eius.
            </p>
        </div>

    </section>

</x-frontend-layout>
