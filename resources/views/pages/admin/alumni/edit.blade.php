@extends('pages.admin.index')

@section('title', 'Edit Alumni')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lulusan</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $alumni->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="yearOfGraduation" class="form-label">Tahun Kelulusan</label>
                    <input type="text" class="form-control" id="yearOfGraduation" name="yearOfGraduation"
                        value="{{ old('yearOfGraduation', $alumni->yearOfGraduation) }}" required>
                    @error('yearOfGraduation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="currentActivity" class="form-label">Kegiatan Saat Ini</label>
                    <input type="text" class="form-control" id="currentActivity" name="currentActivity"
                        value="{{ old('currentActivity', $alumni->currentActivity) }}">
                    @error('currentActivity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="contact" name="contact"
                        value="{{ old('contact', $alumni->contact) }}" required>
                    @error('contact')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="achievements" class="form-label">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple>
                        @foreach ($achievements as $achievement)
                            <option value="{{ $achievement->id }}"
                                {{ in_array($achievement->id, old('achievements', $alumni->achievements->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $achievement->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('achievements')
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

                <!-- Image Preview -->
                <div class="mb-3">
                    @if ($achievement->image)
                        <img id="image-preview" src="{{ asset('storage/achievements/' . $achievement->image) }}" alt="Image Preview" style="max-width: 20%;" />
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
