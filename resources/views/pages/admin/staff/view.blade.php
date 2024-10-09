@extends('pages.admin.index')

@section('title', 'Show Staff')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $staff->name }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $staff->nip }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="jobDesc" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="jobDesc" name="jobDesc" value="{{ $staff->jobDesc }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $staff->linkedin }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    @if ($staff->image)
                        <img src="{{ asset('storage/' . $staff->image) }}" alt="Foto Staff" width="100" height="100">
                    @else
                        <p>No Photo</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="achievements" class="form-label">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple disabled>
                        @if ($staff->achievements->count() > 0)
                            @foreach ($staff->achievements as $achievement)
                                <option value="{{ $achievement->id }}" selected>{{ $achievement->name }}</option>
                            @endforeach
                        @else
                            <option value="">No Achievements</option>
                        @endif
                    </select>
                </div>
            </form>
        </div>
    </div>
@endsection
