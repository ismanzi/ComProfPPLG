@extends('pages.admin.index')

@section('title', 'Create Configuration')

@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('configs.store') }}" method="POST" enctype="multipart/form-data"> <!-- Add action and method -->
                @csrf

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="theBoys" class="form-label">Total Murid Laki-Laki</label>
                        <input type="number" class="form-control" id="theBoys" name="theBoys" required>
                    </div>
                    <div class="col-md-6">
                        <label for="theGurls" class="form-label">Total Murid Perempuan</label>
                        <input type="number" class="form-control" id="theGurls" name="theGurls" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Tentang PPLG</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="vision" class="form-label">Visi</label>
                    <textarea class="form-control" id="vision" name="vision" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="mission" class="form-label">Misi</label>
                    <textarea class="form-control" id="mission" name="mission" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="bgHero" class="form-label">Foto Background Hero</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bgHero" name="bgHero" accept="image/*" required>
                        <label class="custom-file-label" for="bgHero">Choose file</label>
                    </div>
                    <img id="bgHeroPreview" src="#" alt="Preview" style="display:none; max-width: 10%; margin-top: 10px;" />
                </div>
                <div class="mb-3">
                    <label for="logoY" class="form-label">Logo PPLG</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logoY" name="logoY" accept="image/*" required>
                        <label class="custom-file-label" for="logoY">Choose file</label>
                    </div>
                    <img id="logoYPreview" src="#" alt="Preview" style="display:none; max-width: 10%; margin-top: 10px;" />
                </div>
                <div class="mb-3">
                    <label for="logoX" class="form-label">Logo Website</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logoX" name="logoX" accept="image/*" required>
                        <label class="custom-file-label" for="logoX">Choose file</label>
                    </div>
                    <img id="logoXPreview" src="#" alt="Preview" style="display:none; max-width: 10%; margin-top: 10px;" />
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

            // Display the name of the selected image file and show a preview
            function setupFileInput(inputId, previewId) {
                const input = document.getElementById(inputId);
                const label = input.nextElementSibling;
                const preview = document.getElementById(previewId);

                input.addEventListener('change', function (e) {
                    var file = e.target.files[0];
                    if (file) {
                        label.innerText = file.name; // Update label with file name
                        const reader = new FileReader();
                        reader.onload = function (event) {
                            preview.src = event.target.result; // Set preview source
                            preview.style.display = 'block'; // Show preview
                        };
                        reader.readAsDataURL(file); // Read file as data URL
                    }
                });
            }

            // Initialize file inputs
            setupFileInput('bgHero', 'bgHeroPreview');
            setupFileInput('logoY', 'logoYPreview');
            setupFileInput('logoX', 'logoXPreview');
        </script>
    </div>
@endsection
