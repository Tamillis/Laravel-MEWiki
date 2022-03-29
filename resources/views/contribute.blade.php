@extends('layout.base')

@section('title', 'Contribute')
@section('topbar-title', 'Contribute Page')
@section('topbar')

    @parent
@endsection

@section('content')

    <p>This page will be for making contributions to the database.</p>
    <p>The title of the page will be used to link it in to other pages using * and kebab-case (*this-is-an-example), so
        please choose a descriptive name.</p>
    <p>The category notes which other post or heading to connect this one to, for navigation and display on the home page. A
        new one can be written to create a new category.</p>

    @auth
        <form action="#" method="POST" class="flex justify-center flex-col">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="New Title" class="mb-2 @error('title') border-red-2 @enderror" value="{{old('title')}}">
            @error('$title')
                <p class="text-red-500 italic text-sm">{{$message}}</p>
            @enderror
            <label for="category">Category</label>
            <input type="text" name="category" id="category" placeholder="None" class="mb-2 @error('category') border-red-2 @enderror" value="{{old('category')}}">
            @error('$category')
                <p class="text-red-500 italic text-sm">{{$message}}</p>
            @enderror
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" cols="30" rows="12" placeholder="Main content here..." class="mb-2 resize-y @error('body') border-red-2 @enderror" value="{{old('body')}}"></textarea>
            @error('$body')
                <p class="text-red-500 italic text-sm">{{$message}}</p>
            @enderror
            <button type="submit"
                class="w-fit self-end px-2 border-emerald-900 border rounded-md hover:bg-black/10">Submit</button>
        </form>

    @endauth
    @guest
        <p class="m-4 p-2 text-red-500 italic text-sm">You must be logged in to contribute.</p>
    @endguest
@endsection
