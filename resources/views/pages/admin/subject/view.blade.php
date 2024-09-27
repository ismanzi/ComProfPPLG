@extends('pages.admin.index')

@section('title', 'View Achievement')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h3>{{ $achievement->name }}</h3>
            <p><strong>Posisi:</strong> {{ $achievement->position }}</p>
            <p><strong>Bidang:</strong> {{ $achievement->area }}</p>
            <p><strong>Tingkat:</strong> {{ $achievement->level }}</p>
            <p><strong>Penyelenggara:</strong> {{ $achievement->organizer }}</p>
            <p><strong>Tanggal:</strong> {{ $achievement->date }}</p>
            <p><strong>Peserta:</strong> {{ $achievement->participant }}</p>
            <p><strong>Deskripsi:</strong> {{ $achievement->desc }}</p>
            <img src="{{ asset('path_to_your_images/' . $achievement->image) }}" alt="{{ $achievement->name }}">
        </div>
    </div>
@endsection
