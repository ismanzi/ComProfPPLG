@extends('pages.admin.index')

@section('title', 'View Subject')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $subject->name }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="class" class="form-label">Kelas</label>
                    <select class="form-control" id="class" name="class" value="{{ $subject->class }}" disabled>
                        <option value="{{ $subject->class }}">{{ $subject->class }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="hour" class="form-label">Total Jam Per Minggu</label>
                    <input type="text" class="form-control" id="hour" name="hour" value="{{ $subject->hour }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4" disabled>{{ $subject->desc }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" disabled>
                        <label class="custom-file-label" for="image">{{ $subject->image }}</label>
                    </div>
                </div>

                <!-- Image Preview -->
                <div class="mb-3">
                    <img id="image-preview" src="{{ asset('storage/subject/' . $subject->image) }}" alt="Image Preview" style="max-width: 20%;" />
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
            </form>
        </div>
    </div>
@endsection
