@extends('pages.admin.index')

@section('title', 'Create Subject')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('subject.update', $subject->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $subject->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="class" class="form-label">Kelas</label>
                    <select class="form-control" id="class" name="class" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="X RPL 1" {{ old('class', $subject->class) == 'X RPL 1' ? 'selected' : '' }}>X RPL 1
                        </option>
                        <option value="X RPL 2" {{ old('class', $subject->class) == 'X RPL 2' ? 'selected' : '' }}>X RPL 2
                        </option>
                        <option value="XI RPL 1" {{ old('class', $subject->class) == 'XI RPL 1' ? 'selected' : '' }}>XI RPL
                            1</option>
                        <option value="XI RPL 2" {{ old('class', $subject->class) == 'XI RPL 2' ? 'selected' : '' }}>XI RPL
                            2</option>
                        <option value="XII RPL 1" {{ old('class', $subject->class) == 'XII RPL 1' ? 'selected' : '' }}>XII
                            RPL 1</option>
                        <option value="XII RPL 2" {{ old('class', $subject->class) == 'XII RPL 2' ? 'selected' : '' }}>XII
                            RPL 2</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="hour" class="form-label">Total Jam Per Minggu</label>
                    <input type="text" class="form-control" id="hour" name="hour"
                        value="{{ old('hour', $subject->hour) }}" required>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4">{{ old('desc', $subject->desc) }}</textarea>
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
                    @if ($subject->image)
                        <img id="image-preview" src="{{ asset('storage/subjects/' . $subject->image) }}"
                            alt="Image Preview" style="max-width: 20%;" />
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
