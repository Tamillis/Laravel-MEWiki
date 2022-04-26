@extends('layout.base')

@section('title', 'About')
@section('topbar-title', 'About Page')
@section('topbar')

    @parent
@endsection

@section('content')
    <div class="bg-me-map w-full h-full">
        <p>This page will have an overview of the setting.</p>
    </div>
@endsection
