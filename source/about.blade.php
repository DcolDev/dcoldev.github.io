@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>A Propos</h1>

    <p class="mb-6">Dcoldev est une plateforme qui donne la possibilité à tous les acteurs de l'écosystème du numérique un espace de partage , d’entraide et d’échange d’information.</p>


@endsection
