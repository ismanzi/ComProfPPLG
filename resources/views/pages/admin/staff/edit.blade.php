@extends('pages.admin.index')

@section('title', 'Edit Staff')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $staff->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip"
                        value="{{ old('nip', $staff->nip) }}" required>
                    @error('nip')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jobDesc" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="jobDesc" name="jobDesc"
                        value="{{ old('jobDesc', $staff->jobDesc) }}" required>
                    @error('jobDesc')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                        value="{{ old('linkedin', $staff->linkedin) }}">
                    @error('linkedin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <div class="mb-3">
                    @if ($staff->image)
                        <img id="image-preview" src="{{ asset('storage/staff/' . $staff->image) }}" alt="Image Preview"
                            style="max-width: 20%;" />
                    @else
                        <img id="image-preview" src="#" alt="Image Preview" style="max-width: 20%; display: none;" />
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
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

            // Display the name of the selected image file and show image preview
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
