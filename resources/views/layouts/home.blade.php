<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kobilica.com</title>
</head>
<body>
<nav class="flex justify-between items-center mb-4 bg-slate-900 p-4">
    <a href="/">
        <div class="fa-solid fa-bug text-4xl text-white logo"></div>
    </a>
    <ul class="flex text-lg">
        @auth
            <li>
                <span class="font-bold uppercase text-white">Ppozdravljen {{auth()->user()->name}}</span>
            </li>
            <li>
                <a href="/" class="hover:text-white">
                    <i class="fa-solid fa-gear"></i>Uredi oglase
                </a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="hover:text-white">
                        <i class="fa-solid fa-door-closed"></i>Odjava
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/" class="text-white hover:text-slate-300 mr-5">
                    <i class="fa-solid fa-user-plus mr-2"></i>Registriraj se
                </a>
            </li>
            <li>
                <a href="/" class="text-white hover:text-slate-300">
                    <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Prijava
                </a>
            </li>
        @endauth
    </ul>
</nav>

<section class="my-10">
    @include('partials._search')
</section>

<main>
    @yield('content')
</main>
<footer class="fixed bg-slate-400 w-full flex items-center justify-center flex-col  bottom-0 left-0 p-3 font-bold">
    <h4>Spletno programiranje</h4>
    <h4>RIT (UN), FERI UM</h4>
    <h4>Vid Kranjec</h4>
</footer>
</body>
</html>
