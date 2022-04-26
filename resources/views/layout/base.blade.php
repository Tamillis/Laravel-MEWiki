<!DOCTYPE html>
<html lang="en">

<head>
    <title>Materium Existentiae Wiki - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

    </style>
</head>

<body class="bg-bg">
    @section('topbar')
        <div class="">
            <div class="flex flex-col w-fit ml-auto mr-0 absolute right-0 -top-0.5 xs:block">
                @guest
                    <a href="{{ route('login') }}"
                        class="px-2 border-x border-b xs:rounded-b-md border-shade hover:bg-black/10">Login</a>
                @endguest
                @auth
                    <a href="{{ route('logout') }}"
                        class="px-2 border-x border-b xs:rounded-b-md border-shade hover:bg-black/10">Logout
                        {{ auth()->user()->username }}</a>
                @endauth
                <a href="mailto:bellaby1993@hotmail.co.uk?subject=MEWiki contact request"
                    class="px-2 border-l border-b rounded-bl-md border-shade hover:bg-black/10">Contact</a>
            </div>
            <div class="bg-main flex justify-center">
                <h1 class="text-2xl  text-dark p-2 underline center border-x-2 border-b-2 rounded-b-md border-shade">
                    @yield('topbar-title')</h1>
            </div>

            <div class="bg-main rounded-br-md w-fit p-1 border-2 border-l-0 border-shade -translate-y-0.5">
                <ul class="p-2 inline">
                    <li class="inline px-2 border-shade border rounded-md hover:bg-black/10"><a
                            href="{{ route('home') }}">Home
                            Page</a></li>
                    <li class="inline px-2 border-shade border rounded-md hover:bg-black/10"><a
                            href="{{ route('about') }}">About
                            Page</a></li>
                    @auth
                        <li class="inline px-2 border-shade border rounded-md hover:bg-black/10"><a
                                href="{{ route('contribute') }}">Contribute
                                Page</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    @show

    <div class="m-4 p-2 border-2 border-shade rounded-md w-auto md:max-w-3xl md:mx-auto">
        @yield('content')
    </div>
</body>

</html>
