@extends('pages.admin.index')

@section('title', 'View Staff')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $staff->name }}"
                        disabled>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" value="{{ $staff->nip }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="jobDesc" class="form-label">Deskripsi Pekerjaan</label>
                    <textarea class="form-control" name="jobDesc" id="jobDesc" rows="4" value="{{ $staff->nip }}" disabled>{{ $staff->nip }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $staff->linkedin }}"
                        disabled>
                </div>

                <div class="form-group">
                    <label for="achievements">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple="multiple" size="5"
                        disabled>
                        @if (isset($achievements) && count($achievements) > 0)
                            @foreach ($achievements as $achievement)
                                <option value="{{ $achievement->id }}"
                                    {{ in_array($achievement->id, old('achievements', [])) ? 'selected' : '' }}>
                                    {{ $achievement->title }}
                                </option>
                            @endforeach
                        @else
                            <option value="">No Achievements</option>
                        @endif
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" disabled>
                        <label class="custom-file-label" for="image">{{ $staff->image }}</label>
                    </div>
                </div>

                <div class="mb-3">
                    <img id="image-preview" src="{{ asset('storage/staff/' . $staff->image) }}" alt="Image Preview" style="max-width: 20%;" />
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
            </form>
        </div>
    </div>
@endsection
