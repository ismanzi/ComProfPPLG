@extends('pages.admin.index')

@section('title', 'Edit Achievement')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('achievement.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Pencapaian</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $achievement->title }}" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $achievement->date }}" required>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Bidang</label>
                    <input type="text" class="form-control" id="area" name="area" value="{{ $achievement->area }}" required>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Tingkat</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="" disabled>Pilih Tingkat</option>
                        <option value="Sekolah" {{ $achievement->level == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                        <option value="Kecamatan" {{ $achievement->level == 'Kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                        <option value="Kabupaten" {{ $achievement->level == 'Kabupaten' ? 'selected' : '' }}>Kabupaten</option>
                        <option value="Provinsi" {{ $achievement->level == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                        <option value="Nasional" {{ $achievement->level == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="Internasional" {{ $achievement->level == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="categories" class="form-label">Kategori</label>
                    <select class="form-control" id="categories" name="categories" required>
                        <option value="" disabled>Pilih Kategori</option>
                        <option value="Individu" {{ $achievement->categories == 'Individu' ? 'selected' : '' }}>Individu</option>
                        <option value="Tim" {{ $achievement->categories == 'Tim' ? 'selected' : '' }}>Tim</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="participant" class="form-label">Peserta</label>
                    <textarea class="form-control" id="participant" name="participant" rows="4">{{ $achievement->participant }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="organizer" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control" id="organizer" name="organizer" value="{{ $achievement->organizer }}" required>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4">{{ $achievement->desc }}</textarea>
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
