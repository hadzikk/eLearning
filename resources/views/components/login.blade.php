<div class="min-w-full min-h-screen absolute bg-transparent z-10 flex justify-center items-center">
    <div class="w-64 h-96 bg-white shadow rounded">
        <form class="w-full h-full py-3 px-5" action="#" method="POST">
            @csrf
            <p class="text-center">Login</p>

            <p>username</p>
            <input type="text" name="name" placeholder="silahkan masukkan username">
            
            <p>password</p>
            <input type="password" name="password" placeholder="silahkan masukkan password">

            <button type="submit">masuk</button>
        </form>
    </div>
</div>