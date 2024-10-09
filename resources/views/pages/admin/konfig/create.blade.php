@extends('pages.admin.index')

@section('title', 'Create Config')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('konfig.store') }}" method="POST" enctype="multipart/form-data"> <!-- Add action and method -->
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Total Murid Laki-Laki</label>
                    <input type="number" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Total Murid Perempuan</label>
                    <input type="number" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Tentang PPLG</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Visi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Misi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                </div>


                <div class="mb-3">
                    <label for="bgHero" class="form-label">Foto Backround Hero</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bgHero" name="bgHero" required>
                        <label class="custom-file-label" for="bgHero">Choose file</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="logoY" class="form-label">Logo PPLG</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logoY" name="logoY" required>
                        <label class="custom-file-label" for="logoY">Choose file</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="logoX" class="form-label">Logo Website</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logoX" name="logoX" required>
                        <label class="custom-file-label" for="logoX">Choose file</label>
                    </div>
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
