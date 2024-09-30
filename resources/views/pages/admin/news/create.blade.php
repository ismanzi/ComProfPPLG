@extends('pages.admin.index')

@section('title', 'Create News')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">URL Website</label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
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

            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var fileName = document.getElementById("image").files[0].name;
                var nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName;
            });
        </script>
    </div>
@endsection
