@extends('pages.admin.index')

@section('title', 'View Achievement')

@section('content')
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <img src="{{ asset('storage/' . $achievement->image) }}" alt="{{ $achievement->title }}" class="img-fluid">
            <br><br>
            <p><strong>Judul Pencapaian:</strong> {{ $achievement->title }}</p>
            <p><strong>Tanggal:</strong> {{ $achievement->date }}</p>
            <p><strong>Bidang:</strong> {{ $achievement->area }}</p>
            <p><strong>Tingkat:</strong> {{ $achievement->level }}</p>
            <p><strong>Kategori:</strong> {{ $achievement->categories }}</p>
            <p><strong>Peserta:</strong> {{ $achievement->participant }}</p>
            <p><strong>Penyelenggara:</strong> {{ $achievement->organizer }}</p>
            <p><strong>Deskripsi:</strong> {{ $achievement->desc }}</p>
        </div>
    </div>
@endsection
