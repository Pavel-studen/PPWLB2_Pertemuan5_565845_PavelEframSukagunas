@extends('layouts.app')

@section('title', 'Projects - Portfolio')

@section('content')
    <h1>My Project</h1>
    <p>Here are my projects that I've done.</p>

    <div style="display: flex; gap: 15px;">
        @include('partials.card', ['judul' => 'Computer Shop Website'])
        @include('partials.card', ['judul' => 'Hospital Information System'])
        @include('partials.card', ['judul' => 'Web Based Restaurant App'])
    </div>
@endsection