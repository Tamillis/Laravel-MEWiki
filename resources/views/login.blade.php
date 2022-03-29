@extends('layout.base')

@section('title', "Login")
@section('topbar-title', "Login")
@section('topbar')
    
    @parent
@endsection

@section('content')

<p>Please login with your credentials.</p>

<form action="" method="POST" class="flex items-center w-5/6 flex-col bg-black/10">
    <label for="username" class="">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password </label>
    <input type="password" name="password" id="password">
</form>

<p class="text-sm">To gain credentials please contact me, as this data is privately curated.</p>
@endsection