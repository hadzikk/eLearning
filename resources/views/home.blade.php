<x-layout>
    {{-- Navigation --}}
    <x-navbar></x-navbar>

    {{-- Container --}}
    <div class="min-w-full min-h-screen">
        <div class="min-w-full flex gap-2 py-4 px-5 flex-wrap">
            <div class="w-80  h-60 bg-neutral-950 shadow-2xl shadow-black rounded">
                <div class="w-full h-4/6 overflow-hidden">
                    <img class="w-full rounded" src="{{ asset('images/markus-spiske-MgtHZ4zlC1U-unsplash.jpg') }}" alt="">
                </div>
                <div class="w-full h-1/5 py- px-5">
                    <p class="font-nunito text-orange-600">JavaScript</p>
                    <p class="text-white capitalize font-nunito font-bold">mempelajari bahasa pemrograman javascript</p>
                </div>
            </div>

            <div class="w-80  h-60 bg-neutral-950 shadow-2xl shadow-black rounded">
                <div class="w-full h-4/6 overflow-hidden">
                    <img class="w-full rounded" src="{{ asset('images/Google Collab.png') }}" alt="">
                </div>
                <div class="w-full h-1/5 py- px-5">
                    <p class="font-nunito text-orange-600">Python</p>
                    <p class="text-white capitalize font-nunito font-bold">mempelajari data analyst menggunakan google collab</p>
                </div>
            </div>

            <div class="w-80  h-60 bg-neutral-950 shadow-2xl shadow-black rounded">
                <div class="w-full h-4/6 overflow-hidden">
                    <img class="w-full rounded" src="{{ asset('images/GO logo.png') }}" alt="">
                </div>
                <div class="w-full h-1/5 py- px-5">
                    <p class="font-nunito text-orange-600">GO</p>
                    <p class="text-white capitalize font-nunito font-bold">membangun back end menggunakan go</p>
                </div>
            </div>
            
            <div class="w-80  h-60 bg-neutral-950 shadow-2xl shadow-black rounded">
                <div class="w-full h-4/6 overflow-hidden">
                    <img class="w-full rounded" src="{{ asset('images/markus-spiske-MgtHZ4zlC1U-unsplash.jpg') }}" alt="">
                </div>
                <div class="w-full h-1/5 py- px-5">
                    <p class="font-nunito text-orange-600">JavaScript</p>
                    <p class="text-white capitalize font-nunito font-bold">mempelajari bahasa pemrograman javascript</p>
                </div>
            </div>
        </div>
        <div class="min-w-full flex gap-2 py-4 px-5 flex-wrap">
            <div class="w-80  h-60 bg-white shadow rounded"></div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>