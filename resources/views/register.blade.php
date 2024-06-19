<x-layout>
    <div class="w-full h-screen flex items-center justify-center">
        <div class="w-3/4 h-4/5 bg-white shadow rounded flex">
            <div class="w-1/3 h-full shadow">
                <img class="w-full h-full rounded" src="{{ asset('images/jacqueline-munguia-1pAwJiCD60c-unsplash.jpg') }}" alt="">
            </div>

            <div class="w-2/3 h-full py-3 px-5">
                <p class="text-2xl font-bold font-poppins">daftar</p>

                <form action="">
                    <p>nama</p>
                    <input class="w-full font-nunito border border-r-black" type="text" placeholder="silahkan masukkan nama anda">
                    <p>email</p>
                    <input type="email" placeholder="silahkan masukkan email anda">
                    <p>password</p>
                    <input type="password" placeholder="silahkan masukkan password">
                    <button>daftar</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>