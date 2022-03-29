<!DOCTYPE html>
<html lang="en">

<head>
    <title>Materium Existentiae Wiki - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

    </style>
</head>

<body class="bg-slate-200">
    @section('topbar')
        <div class="">
            <div class="fixed right-0 top-0">
                @guest
                    <a href="{{ route('login') }}"
                        class="px-2 border-x border-b rounded-b-md border-green-900 hover:bg-black/10">Login</a>
                @endguest
                @auth
                    <a href="{{ route('logout') }}"
                        class="px-2 border-x border-b rounded-b-md border-green-900 hover:bg-black/10">Logout</a>
                @endauth
                <a href="mailto:bellaby1993@hotmail.co.uk?subject=MEWiki contact request"
                    class="px-2 border-l border-b rounded-bl-md border-green-900 hover:bg-black/10">Contact</a>
            </div>
            <div class="bg-green-300 flex justify-center">
                <h1
                    class="text-2xl  text-green-900 p-2 underline center border-x-2 border-b-2 rounded-b-md border-green-900">
                    @yield('topbar-title')</h1>
            </div>

            <div class="bg-green-300 rounded-br-md w-fit p-1 border-t-2 border-green-900">
                <ul class="p-2 inline">
                    <li class="inline px-2 border-green-900 border rounded-md hover:bg-black/10"><a
                            href="{{ route('home') }}">Home
                            Page</a></li>
                    <li class="inline px-2 border-green-900 border rounded-md hover:bg-black/10"><a
                            href="{{ route('about') }}">About
                            Page</a></li>
                    <li class="inline px-2 border-green-900 border rounded-md hover:bg-black/10"><a
                            href="{{ route('contribute') }}">Contribute
                            Page</a></li>
                </ul>
            </div>
        </div>
    @show

    <div class="m-4 p-2 border-2 border-green-900 rounded-md w-auto md:max-w-3xl md:mx-auto">
        @yield('content')
    </div>
</body>

</html>
