@extends('pages.admin.index')

@section('title', 'Create Subject')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data"> <!-- Add action and method -->
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="class" class="form-label">Kelas</label>
                    <select class="form-control" id="class" name="class" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="X RPL 1">X RPL 1</option>
                        <option value="X RPL 2">X RPL 2</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="hour" class="form-label">Total Jam Per Minggu</label>
                    <input type="text" class="form-control" id="hour" name="hour" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
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
            // Alert confirm discard changes
            function confirmCancel() {
                const userConfirmed = confirm("Are you sure you want to cancel these changes?");
                if (userConfirmed) {
                    window.history.back();
                }
            }

            // Display the name of the selected image file
            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var fileName = document.getElementById("image").files[0].name;
                var nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName;
            });
        </script>
    </div>
@endsection
