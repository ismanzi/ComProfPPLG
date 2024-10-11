@extends('pages.admin.index')

@section('title', 'Create Project')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Projek</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}"
                        disabled>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $project->date }}"
                        disabled>
                </div>

                <div class="mb-3">
                    <label for="team" class="form-label">Tim</label>
                    <input type="text" class="form-control" id="team" name="team" value="{{ $project->team }}"
                        disabled>
                </div>

                <div class="mb-3">
                    <label for="subject_id" class="form-label">Subjek</label>
                    <select class="form-control" id="subject_id" name="subject_id" disabled>
                    <option value="{{ $project->subject_id }}" selected>{{ $project->subject->name}}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ $project->link }}"
                        disabled>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4" value="{{ $project->desc }}" disabled>{{ $project->desc }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" disabled>
                        <label class="custom-file-label" for="image">{{ $project->image }}</label>
                    </div>
                </div>

                <!-- Image Preview -->
                <div class="mb-3">
                    <img id="image-preview" src="{{ asset('storage/project/' . $project->image) }}" alt="Image Preview" style="max-width: 20%;" />
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
            </form>
        </div>
    </div>
@endsection
