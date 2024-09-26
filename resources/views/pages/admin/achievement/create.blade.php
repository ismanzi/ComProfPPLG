@extends('pages.admin.index')

@section('title', 'Create Achievement')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama_pencapaian" class="form-label">Nama Pencapaian</label>
                    <input type="text" class="form-control" id="nama_pencapaian" name="nama_pencapaian" required>
                </div>
                <div class="mb-3">
                    <label for="posisi" class="form-label">Posisi</label>
                    <input type="text" class="form-control" id="posisi" name="posisi" required>
                </div>
                <div class="mb-3">
                    <label for="bidang" class="form-label">Bidang</label>
                    <input type="text" class="form-control" id="bidang" name="bidang" required>
                </div>
                <div class="mb-3">
                    <label for="tingkat" class="form-label">Tingkat</label>
                    <input type="text" class="form-control" id="tingkat" name="tingkat" required>
                </div>
                <div class="mb-3">
                    <label for="penyelenggara" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>

                <div class="mb-3">
                    <label for="peserta" class="form-label">Peserta</label>
                    <textarea class="form-control" id="peserta" name="peserta" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Tambahan</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
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
