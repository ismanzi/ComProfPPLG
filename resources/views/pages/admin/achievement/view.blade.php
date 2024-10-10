@extends('pages.admin.index')

@section('title', 'View Achievement')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Pencapaian</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $achievement->title }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $achievement->date }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Bidang</label>
                    <input type="text" class="form-control" id="area" name="area" value="{{ $achievement->area }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Tingkat</label>
                    <select class="form-control" id="level" name="level" disabled>
                        <option value="{{ $achievement->level }}" selected>{{ $achievement->level }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="categories" class="form-label">Kategori</label>
                    <select class="form-control" id="categories" name="categories" disabled>
                        <option value="{{ $achievement->categories }}" selected>{{ $achievement->categories }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="participant" class="form-label">Peserta</label>
                    <textarea class="form-control" id="participant" name="participant" rows="4" disabled>{{ $achievement->participant }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="organizer" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control" id="organizer" name="organizer" value="{{ $achievement->organizer }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4" disabled>{{ $achievement->desc }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" disabled>
                        <label class="custom-file-label" for="image">{{ $achievement->image }}</label>
                    </div>
                </div>

                <!-- Image Preview -->
                <div class="mb-3">
                    <img id="image-preview" src="{{ asset('storage/achievements/' . $achievement->image) }}" alt="Image Preview" style="max-width: 20%;" />
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
            </form>
        </div>
    </div>
@endsection
