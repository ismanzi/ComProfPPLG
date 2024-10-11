@extends('pages.admin.index')

@section('title', 'Create Project')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Projek</label>
                    <input type="text" class="form-control" id="name" name="name"  value="{{ old('name', $project->name) }}"  required>
                </div>
                <div class="mb-3">
                    <label for="team" class="form-label">Tim</label>
                    <input type="text" class="form-control" id="team" name="team"  value="{{ old('team', $project->team) }}"  required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    @if ($news->image)
                        <p>Current image: <a href="{{ asset('storage/' . $news->image) }}" target="_blank">View Image</a></p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link"  value="{{ old('link', $project->link) }}"  required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date"  value="{{ old('date', $project->date) }}"  required>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"  value="{{ old('desc', $project->desc) }}" ></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-secondary" onclick="confirmCancel()">Cancel</button>
            </form>

        </div>

        <!-- JavaScript -->
        <script>
            function confirmCancel() {
                const userConfirmed = confirm("Are you sure you want to cancel these changes?");
                if (userConfirmed) {
                    window.history.back();
                }
            }
        </script>
    </div>
@endsection
