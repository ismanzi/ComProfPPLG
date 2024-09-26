@extends('pages.admin.index')

@section('title', 'Create Subject')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>
                <div class="mb-3">
                    <label for="hour" class="form-label">Total Jam Per Minggu</label>
                    <input type="text" class="form-control" id="hour" name="hour" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi Tambahan</label>
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
