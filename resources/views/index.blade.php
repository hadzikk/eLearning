<x-layout>
    {{-- Navigation --}}
    <x-navbar></x-navbar>

    {{-- Container --}}
    <div class="min-w-full h-screen flex gap-4 py-3 px-5">
        <x-login></x-login>
        {{-- Content --}}
        <div class="w-2/4 min-h-full py-5 px-5 bg-yellow-300 shadow rounded">
            <p>belajar sekarang</p>
            <h1 class="text-8xl font-bold w-96">Belajar Mudah, Masa Depan Cerah</h1>
        </div>
        {{-- Content --}}
        <div class="w-2/4 min-h-full bg-white shadow rounded overflow-hidden relative">
            {{-- <img src="{{ asset('images/annie-spratt-vGgn0xLdy8s-unsplash.jpg') }}" alt="Online Learning Illustration" class="w-full h-full rounded object-cover absolute z-0"> --}}
            <div class="absolute z-10 py-5 px-5">
                <p class="text-2xl font-bold w-96 text-white">belajar dimana saja</p>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</x-layout>