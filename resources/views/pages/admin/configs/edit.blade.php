@extends('pages.admin.index')

@section('title', 'Edit Configuration')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('configs.update', $configs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <div class="col">
                        <label for="theBoys" class="form-label">Total Murid Laki-Laki</label>
                        <input type="number" class="form-control" id="theBoys" name="theBoys" value="{{ $configs->theBoys }}" required>
                    </div>
                    <div class="col">
                        <label for="theGurls" class="form-label">Total Murid Perempuan</label>
                        <input type="number" class="form-control" id="theGurls" name="theGurls" value="{{ $configs->theGurls }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Tentang PPLG</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4" required>{{ htmlspecialchars($configs->desc) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="vision" class="form-label">Visi</label>
                    <textarea class="form-control" id="vision" name="vision" rows="4" required>{{ htmlspecialchars($configs->vision) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="mission" class="form-label">Misi</label>
                    <textarea class="form-control" id="mission" name="mission" rows="4" required>{{ htmlspecialchars($configs->mission) }}</textarea>
                </div>


                <div class="mb-3">
                    <label for="bgHero" class="form-label">Foto Background Hero</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bgHero" name="bgHero" accept="image/*">
                        <label class="custom-file-label" for="bgHero">Choose file</label>
                    </div>
                    @if ($configs->bgHero)
                        <img id="bgHero-preview" src="{{ asset('storage/config/' . $configs->bgHero) }}" alt="Background Hero Preview" style="max-width: 20%; margin-top: 10px;" />
                    @endif
                </div>

                <div class="mb-3">
                    <label for="logoY" class="form-label">Logo PPLG</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logoY" name="logoY" accept="image/*">
                        <label class="custom-file-label" for="logoY">Choose file</label>
                    </div>
                    @if ($configs->logoY)
                        <img id="logoY-preview" src="{{ asset('storage/config/' . $configs->logoY) }}" alt="Logo PPLG Preview" style="max-width: 20%; margin-top: 10px;" />
                    @endif
                </div>

                <div class="mb-3">
                    <label for="logoX" class="form-label">Logo Website</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logoX" name="logoX" accept="image/*">
                        <label class="custom-file-label" for="logoX">Choose file</label>
                    </div>
                    @if ($configs->logoX)
                        <img id="logoX-preview" src="{{ asset('storage/config/' . $configs->logoX) }}" alt="Logo Website Preview" style="max-width: 20%; margin-top: 10px;" />
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
            const customFileInputs = document.querySelectorAll('.custom-file-input');

            customFileInputs.forEach(input => {
                input.addEventListener('change', function(e) {
                    var file = e.target.files[0];
                    var fileName = file.name;
                    var nextSibling = e.target.nextElementSibling;
                    nextSibling.innerText = fileName;

                    // Create a URL object from the selected file
                    var imageURL = URL.createObjectURL(file);
                    var imagePreviewId = e.target.id + '-preview';
                    var imagePreview = document.getElementById(imagePreviewId);

                    // Display the image preview
                    imagePreview.src = imageURL;
                    imagePreview.style.display = 'block';
                });
            });
        </script>
    </div>
@endsection
