<div class="w-full h-screen absolute bg-transparent z-10 flex justify-center items-center">
    <div class="w-64 h-96 bg-white shadow rounded">
        <form class="w-full h-full py-3 px-5" action="{{ route('login.post') }}" method="POST">
            @csrf
             <p class="text-center">Login</p>

             <p>email</p>
             <input type="email" name="email" placeholder="silahkan masukkan username">
            
             <p>password</p>
             <input type="password" name="password" placeholder="silahkan masukkan password">

            <button type="submit">masuk</button>
        </form>
    </div>
</div>