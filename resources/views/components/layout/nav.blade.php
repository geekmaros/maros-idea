<nav class="border-border border-b px-6">
    <div class="max-w-7xl mx-auto h-16 flex justify-between items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" width="100" alt="Site Logo">
            </a>
        </div>

        <div class="flex gap-x-5 items-center">

            @auth
                <form action="/logout" method="POST">
                    @csrf

                    <button class="btn">Logout</button>
                </form>

            @endauth

            @guest
                    <a href="/register" class="btn">Register</a>
                    <a href="/login">Login</a>
            @endguest
        </div>
    </div>
</nav>
