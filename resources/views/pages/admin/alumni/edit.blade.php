@extends('pages.admin.index')

@section('title', 'Edit Alumni')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lulusan</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $alumni->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="yearOfGraduation" class="form-label">Tahun Kelulusan</label>
                    <input type="text" class="form-control" id="yearOfGraduation" name="yearOfGraduation"
                        value="{{ old('yearOfGraduation', $alumni->yearOfGraduation) }}" required>
                    @error('yearOfGraduation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="currentActivity" class="form-label">Kegiatan Saat Ini</label>
                    <input type="text" class="form-control" id="currentActivity" name="currentActivity"
                        value="{{ old('currentActivity', $alumni->currentActivity) }}">
                    @error('currentActivity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="contact" name="contact"
                        value="{{ old('contact', $alumni->contact) }}" required>
                    @error('contact')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        @if ($alumni->image)
                            <img src="{{ asset('storage/' . $alumni->image) }}" alt="Foto Alumni" width="100"
                                height="100">
                        @endif
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="achievements" class="form-label">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple>
                        @foreach ($achievements as $achievement)
                            <option value="{{ $achievement->id }}"
                                {{ in_array($achievement->id, old('achievements', $alumni->achievements->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $achievement->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('achievements')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" onclick="confirmCancel()">Cancel</button>
            </form>
        </div>

        {{-- CSS --}}
        <style>
            select.form-control {
                height: calc(2.25rem + 2px);
                padding: .375rem .75rem;
                font-size: 1rem;
                line-height: 1.5;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                background-color: #fff;
                background-clip: padding-box;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
        </style>

        <!-- JavaScript -->
        <script>
            function confirmCancel() {
                const userConfirmed = confirm("Are you sure you want to cancel these changes?");
                if (userConfirmed) {
                    window.history.back();
                }
            }

            $('#achievements').on('change', function() {
                var blankOptionSelected = $(this).find('option[value=""]:selected').length > 0;
                var selectedOptions = $(this).val();
                if (blankOptionSelected) {
                    console.log('Blank option selected');
                } else if (selectedOptions.length === 1) {
                    console.log('One achievement selected:', selectedOptions);
                } else {
                    console.log('Multiple achievements selected:', selectedOptions);
                }
            });

            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var fileName = document.getElementById("image").files[0].name;
                var nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName;
            });
        </script>
    </div>
@endsection
