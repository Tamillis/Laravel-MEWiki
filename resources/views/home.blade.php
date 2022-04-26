@extends('layout.base')

@section('title', 'Home')
@section('topbar-title', 'Home Page')
@section('topbar')

    @parent
@endsection

@section('content')

    <p>WIP: to be a dynamic menu based on contributed categories</p>

    @foreach ($docs as $doc)
        <div class="my-2 border-2 border-black/20 rounded-lg w-full sm:w-fit">
            <div class="flex flex-col xs:flex-row items-center">
                <div class="m-1">
                    <h2 class="text-xl font-semibold inline">|{{ $doc->category }}|</h2>

                    <div class="bg-black/10 px-4 w-fit rounded-md">
                        <p class="text-lg underline">{{ $doc->title }}</p>
                        <p class="w-52 sm:w-96">{{ $doc->body }}</p>
                        <p class="indent-1 text-sm font-light text-gray-700"> &Rightarrow; {{ $doc->user->username }} -
                            {{ $doc->created_at->isoFormat('ll') }}</p>
                    </div>
                </div>
                <img src="{{ $doc->imgURL }}" alt="No Image Found" class="p-2 sm:m-0 sm:w-full w-52 xs:w-full">
            </div>

            @if (Auth::id() == $doc->user->id)
                <button class="bg-black/10 px-4 w-fit rounded-md m-2">Edit</button>
                <button class="bg-black/10 px-4 w-fit rounded-md m-2">Delete</button>
            @endif
        </div>
        {{-- TODO: rewrite above to be the dynamic category sorted list that is clickable, taking the user to a dedicated page for that selected doc --}}
    @endforeach

@endsection
