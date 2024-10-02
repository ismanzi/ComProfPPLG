@extends('pages.admin.index')

@section('title', 'View Subject')

@section('content')
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <img src="{{ asset('storage/' . $subject->image) }}" alt="{{ $subject->name }}" class="img-fluid">
            <br><br>
            <p><strong>Nama Mata Pelajaran:</strong> {{ $subject->name }}</p>
            <p><strong>Kelas:</strong> {{ $subject->class }}</p>
            <p><strong>Jumlah Jam Per Minggu:</strong> {{ $subject->hour }}</p>
            <p><strong>Deskripsi:</strong> {{ $subject->desc }}</p>
        </div>
    </div>
@endsection
