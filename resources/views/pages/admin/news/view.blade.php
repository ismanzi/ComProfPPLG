@extends('pages.admin.index')

@section('title', 'View News')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">URL Website</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $news->slug }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $news->date }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4" disabled>{{ $news->desc }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" disabled>
                        <label class="custom-file-label" for="image">{{ $news->image }}</label>
                    </div>
                </div>

                <!-- Image Preview -->
                <div class="mb-3">
                    <img id="image-preview" src="{{ asset('storage/news/' . $news->image) }}" alt="Image Preview" style="max-width: 20%;" />
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
            </form>
        </div>
    </div>
@endsection
