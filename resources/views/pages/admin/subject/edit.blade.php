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
                        <option value="X RPL 2" {{ old('class', $subject->class) == 'X RPL 1' ? 'selected' : '' }}>X RPL 2
                        </option>
                        <option value="XI RPL 1" {{ old('class', $subject->class) == 'XI RPL 1' ? 'selected' : '' }}>XI RPL
                            1
                        </option>
                        <option value="XI RPL 2" {{ old('class', $subject->class) == 'XI RPL 2' ? 'selected' : '' }}>XI RPL
                            2
                        </option>
                        <option value="XII RPL 1" {{ old('class', $subject->class) == 'XII RPL 1' ? 'selected' : '' }}>XII
                            RPL
                            1</option>
                        <option value="XII RPL 2" {{ old('class', $subject->class) == 'XII RPL 2' ? 'selected' : '' }}>XII
                            RPL
                            2</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="hour" class="form-label">Total Jam Per Minggu</label>
                    <input type="text" class="form-control" id="hour" name="hour"
                        value="{{ old('hour', $subject->hour) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    @if ($subject->image)
                        <p class="mt-2">Current image: <a href="{{ asset('storage/' . $subject->image) }}"
                                target="_blank">View Image</a></p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4">{{ old('desc', $subject->desc) }}</textarea>
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
