<footer class="bg-purple-200 text-[#2d2b2b] mt-10 border-t-8 border-[gray]">

    <div class="container mx-auto px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Company -->
            <div>
                <h2 class="text-2xl font-bold text-[purple]">
                    जवाफ<span class="text-[gray]">डिजिटल पत्रिका</span>
                </h2>
                <p class="mt-4 text-[#2d2b2b]">
                    जवाफ डिजिटल पत्रिका एक नेपाली अनलाइन समाचार माध्यम हो, जसले सत्य, सन्तुलित र समयसापेक्ष समाचार तथा
                    जानकारीलाई डिजिटल प्रविधिमार्फत पाठकसम्म पुर्‍याउने उद्देश्य राख्दछ।
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold mb-4">
                    उपयोगी लिङ्कहरू
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/') }}"
                            class="group flex items-center transition-colors duration-300 hover:text-orange-500">
                            <span
                                class="h-0.5 w-0 bg-orange-500 mr-0 transition-all duration-300 group-hover:w-2 group-hover:mr-2">
                            </span>
                            <span>गृहपृष्ठ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}"
                            class="group flex items-center transition-colors duration-300 hover:text-orange-500">
                            <span
                                class="h-0.5 w-0 bg-orange-500 mr-0 transition-all duration-300 group-hover:w-2 group-hover:mr-2">
                            </span>
                            <span>हाम्रो बारेमा</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/courses') }}"
                            class="group flex items-center transition-colors duration-300 hover:text-orange-500">
                            <span
                                class="h-0.5 w-0 bg-orange-500 mr-0 transition-all duration-300 group-hover:w-2 group-hover:mr-2">
                            </span>
                            <span>पाठ्यक्रमहरू</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"
                            class="group flex items-center transition-colors duration-300 hover:text-orange-500">
                            <span
                                class="h-0.5 w-0 bg-orange-500 mr-0 transition-all duration-300 group-hover:w-2 group-hover:mr-2">
                            </span>
                            <span>सम्पर्क</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-xl font-semibold mb-4">
                    सम्पर्क
                </h3>
                <p class="mb-2">
                    <i class="fa-solid fa-location-dot text-orange-500"></i>
                    वालिङ्ग १, रामबाच्छा, स्याङ्गजा
                </p>
                <p class="mb-2">
                    <i class="fa-solid fa-phone text-orange-500"></i>
                    +९७७-९८६००१३१३७
                </p>
                <p>
                    <i class="fa-solid fa-envelope text-orange-500"></i>
                    drgurung82@gmail.com
                </p>
            </div>

            <!-- Social -->
            <div>
                <h3 class="text-xl font-semibold mb-4">
                    सामाजिक सञ्जालमा 'हामी'
                </h3>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-blue-400 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fa-brands fa-facebook fa-jello"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-pink-400 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fa-brands fa-instagram fa-flip"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-[red] hover:bg-orange-600 flex items-center justify-center">
                        <i class="fa-brands fa-youtube fa-swing"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-[gray] hover:bg-orange-600 flex items-center justify-center">
                        <i class="fa-brands fa-github fa-beat-fade"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-purple-400 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fa-brands fa-tiktok fa-fade" style="color: rgb(0, 0, 0);"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="border-[purple] my-8">

        <!-- Footer Menu -->
        <div class="container mx-auto flex justify-center py-1 pb-8">
            <div class="flex flex-wrap justify-center gap-2 sm:gap-3">
                <a href="/"
                    class="hover:text-white hover:bg-orange-500 text-[white] bg-[purple] px-2 py-1 border rounded-md"><i class="fa-solid fa-house"></i>गृहपृष्ठ</a>
                <a href="/about"
                    class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">हाम्रो
                    बारेमा</a>
                <a href="/contact"
                    class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">सम्पर्क</a>
                <a href="#"
                    class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">अस्वीकरण</a>
                <a href="#"
                    class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">गोपनीयता</a>
                <a href="#"
                    class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">साइटम्याप
                </a>
                <a href="#"
                    class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">सर्तहरू</a>
            </div>
            <div>
                <a href="https://wa.me/9860013137" target="_blank"
                    class="fixed right-5 bottom-5 flex items-center gap-2 bg-[green] text-[white] px-4 py-1 rounded-md shadow-lg hover:bg-green-600 transition">Chat
                    on Whatsapp<i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="text-center text-[gray]">
            ©
            {{ str_replace(
                ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
                ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'],
                date('Y'),
            ) }}
            <a href="http://127.0.0.1:8000/" class="hover:text-orange-600 text-black">जवाफ डट कम</a> | सर्वाधिकार सुरक्षित
        </div>
    </div>

</footer>
