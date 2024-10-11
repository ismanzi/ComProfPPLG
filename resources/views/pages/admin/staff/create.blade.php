@extends('pages.admin.index')

@section('title', 'Create Staff')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" required>
                    @error('nip')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jobDesc" class="form-label">Deskripsi Pekerjaan</label>
                    <textarea class="form-control" name="jobDesc" id="jobDesc" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                    @error('linkedin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Mengarah ke tabel achievement --}}
                <div class="form-group">
                    <label for="achievements">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple="multiple" size="5">
                        @if (count($achievements) == 0)
                            <option value="">No Achievements</option>
                        @else
                            @foreach ($achievements as $achievement)
                                <option value="{{ $achievement->id }}"
                                    {{ in_array($achievement->id, old('achievements', [])) ? 'selected' : '' }}>
                                    {{ $achievement->title }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                    @error('achievements')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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
