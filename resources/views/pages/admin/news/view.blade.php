@extends('pages.admin.index')

@section('title', 'View News')

@section('content')
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid">
            <br><br>
            <p><strong>Nama:</strong> {{ $news->title }}</p>
            <p><strong>Posisi:</strong> {{ $news->slug }}</p>
            <p><strong>Bidang:</strong> {{ $news->desc }}</p>
        </div>
    </div>
@endsection
