@extends('layout.base')

@section('title', 'Login')
@section('topbar-title', 'Login')
@section('topbar')

    @parent
@endsection

@section('content')

    <p>Please login with your credentials.</p>

    <form action="" method="POST" class="flex items-center mx-auto w-full sm:w-lg flex-col bg-black/10">
        @csrf
        <label for="username" class="">Username</label>
        <input type="text" name="username" id="username" class="w-3/6">
        @error('username')
            <p class="text-red-500 italic text-sm">{{ $message }}</p>
        @enderror
        <label for="password">Password </label>
        <input type="password" name="password" id="password" class="w-3/6">
        @error('password')
            <p class="text-red-500 italic text-sm">{{ $message }}</p>
        @enderror
        <button type="submit" class="w-fit px-2 my-1 border-emerald-900 border rounded-md hover:bg-black/10">Submit</button>

    </form>

    <p class="text-sm">To gain credentials please contact me, as this data is privately curated.</p>
@endsection
