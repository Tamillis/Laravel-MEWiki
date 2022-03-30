@extends('layout.base')

@section('title', "Home")
@section('topbar-title', "Home Page")
@section('topbar')
    
    @parent
@endsection

@section('content')

<p>This is the home page. General overview of pages here!</p>

{{-- TODO, pull in all docs from the database and display links to view that doc, organised by category --}}
@endsection
