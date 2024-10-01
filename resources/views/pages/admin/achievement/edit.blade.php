@extends('pages.admin.index')

@section('title', 'Edit Achievement')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('achievement.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h5 class="card-title mb-4">Edit Achievement</h5>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $achievement->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="position" class="form-label">Posisi</label>
                    <input type="text" class="form-control" id="position" name="position"
                        value="{{ old('position', $achievement->position) }}" required>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Bidang</label>
                    <input type="text" class="form-control" id="area" name="area"
                        value="{{ old('area', $achievement->area) }}" required>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Tingkat</label>
                    <select class="form-select" id="level" name="level" required>
                        <option value="" disabled selected>Pilih Tingkat</option>
                        <option value="Sekolah" {{ old('level', $achievement->level) == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                        <option value="Kecamatan" {{ old('level', $achievement->level) == 'Kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                        <option value="Kabupaten" {{ old('level', $achievement->level) == 'Kabupaten' ? 'selected' : '' }}>Kabupaten</option>
                        <option value="Provinsi" {{ old('level', $achievement->level) == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                        <option value="Nasional" {{ old('level', $achievement->level) == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                        <option value="Internasional" {{ old('level', $achievement->level) == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="organizer" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control" id="organizer" name="organizer"
                        value="{{ old('organizer', $achievement->organizer) }}" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date"
                        value="{{ old('date', $achievement->date) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    @if ($achievement->image)
                        <p class="mt-2">Current image: <a href="{{ asset('storage/' . $achievement->image) }}" target="_blank">View Image</a></p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="participant" class="form-label">Peserta</label>
                    <textarea class="form-control" id="participant" name="participant" rows="4">{{ old('participant', $achievement->participant) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4">{{ old('desc', $achievement->desc) }}</textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" onclick="confirmCancel()">Cancel</button>
                </div>
            </form>
        </div>
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
@endsection
