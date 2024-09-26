@extends('pages.admin.index')

@section('title', 'Create Alumni')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lulusan</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="yearOfGraduation" class="form-label">Tahun Kelulusan</label>
                    <input type="text" class="form-control" id="yearOfGraduation" name="yearOfGraduation" required>
                </div>
                <div class="mb-3">
                    <label for="currentActivity" class="form-label">Kegiatan Saat Ini</label>
                    <input type="text" class="form-control" id="currentActivity" name="currentActivity" required>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                {{-- Buat dropdown Achievement --}}
                <div class="mb-3">
                    <label for="achievement" class="form-label">Penghargaan selama di Sekolah</label>
                    <textarea class="form-control" id="achievement" name="achievement" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
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
