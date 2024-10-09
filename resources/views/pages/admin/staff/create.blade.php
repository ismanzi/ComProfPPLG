@extends('pages.admin.index')

@section('title', 'Create Staff')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" required>
                    @error('nip')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jobDesc" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="jobDesc" name="jobDesc" required>
                    @error('jobDesc')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                    @error('linkedin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="image">Choose file</label>
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Mengarah ke tabel achievement --}}
                <div class="form-group">
                    <label for="achievements">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple="multiple" size="5">
                        @if (count($achievements) == 0)
                            <option value="">No Achievements</option>
                        @else
                            @foreach ($achievements as $achievement)
                                <option value="{{ $achievement->id }}"
                                    {{ in_array($achievement->id, old('achievements', [])) ? 'selected' : '' }}>
                                    {{ $achievement->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                    @error('achievements')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
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
