@extends('layout.base')

@section('title', 'Home')
@section('topbar-title', 'Home Page')
@section('topbar')

    @parent
@endsection

@section('content')

    <p>This is the home page. General overview of pages here!</p>

    @foreach ($docs as $doc)
        <h2 class="text-xl font-semibold">|{{ $doc->category }}|</h2>
        <div class="bg-black/10 px-4 w-fit rounded-md">
            <p class="text-lg underline">{{ $doc->title }}</p>
            <p>{{ $doc->body }}</p>
            <p class="indent-1 text-sm font-light text-gray-700"> &Rightarrow; {{ $doc->user->username }} - {{ $doc->created_at->isoFormat('ll') }}</p>
        </div>

        {{-- TODO: rewrite above to be the dynamic category sorted list that is clickable, taking the user to a dedicated page for that selected doc --}}
    @endforeach

@endsection
