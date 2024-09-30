@extends('pages.admin.index')
@section('title', 'View News')
@section('content')
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <p><strong>Judul:</strong> {{ $news->title }}</p>
            <p><strong>URL Website:</strong> {{ $news->slug }}</p>
            <p><strong>Deskripsi:</strong> {{ $news->desc }}</p>
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->name }}" class="img-fluid">
        </div>
    </div>
@endsection