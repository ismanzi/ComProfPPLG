@extends('pages.admin.index')

@section('title', 'Create Project')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Projek</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="team" class="form-label">Tim</label>
                    <input type="text" class="form-control" id="team" name="team" required>
                </div>
                {{-- Mengarah ke tabel subject --}}
                <div class="mb-3">
                    <label for="subject_id" class="form-label">Subjek</label>
                    <select class="form-control" id="subject_id" name="subject_id">
                        <option selected disabled>Pilih Id</option>
                        @foreach ($subject as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
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
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
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

            document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                var fileName = document.getElementById("image").files[0].name;
                var nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName;
            });
        </script>
    </div>
    </div>
@endsection
