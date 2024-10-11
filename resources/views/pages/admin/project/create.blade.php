@extends('pages.admin.index')

@section('title', 'Create Project')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Projek</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="mb-3">
                    <label for="team" class="form-label">Tim</label>
                    <input type="text" class="form-control" id="team" name="team" required>
                </div>

                <div class="mb-3">
                    <label for="subject_id" class="form-label">Subjek</label>
                    <select class="form-control" id="subject_id" name="subject_id" required>
                        <option selected disabled>Pilih Subjek</option>
                        @foreach ($subject as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" required>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*"
                            required>
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <div class="mb-3">
                    <img id="image-preview" src="#" alt="Image Preview" style="max-width: 20%; display: none;" />
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <button type="button" class="btn btn-secondary" onclick="confirmCancel()">Cancel</button>
            </form>
        </div>

        <!-- JavaScript -->
        <script>
            // Alert confirm discard changes
            function confirmCancel() {
                const userConfirmed = confirm("Are you sure you want to cancel these changes?");
                if (userConfirmed) {
                    window.history.back();
                }
            }

            // Display name of selected image and show image preview
            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var file = e.target.files[0];
                var fileName = file.name;
                var nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName;

                // Create a URL object from the selected file
                var imageURL = URL.createObjectURL(file);

                // Display the image preview
                var imagePreview = document.getElementById('image-preview');
                imagePreview.src = imageURL;
                imagePreview.style.display = 'block';
            });
        </script>
    </div>
@endsection
