@extends('pages.admin.index')

@section('title', 'Edit News')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Judul Artikel -->
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}" required>
                </div>

                <!-- URL Website -->
                <div class="mb-3">
                    <label for="slug" class="form-label">URL Website</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $news->slug) }}" required>
                </div>

                <!-- Foto -->
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

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4">{{ old('desc', $news->desc) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date"
                        value="{{ old('date', $news->date) }}" required>
                </div>

                <!-- Button Submit dan Cancel -->
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

            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var fileName = document.getElementById("image").files[0].name;
                var nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName;
            });
        </script>
    </div>
@endsection
