@extends('pages.admin.index')

@section('title', 'Show Alumni')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lulusan</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $alumni->name }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="yearOfGraduation" class="form-label">Tahun Kelulusan</label>
                    <input type="text" class="form-control" id="yearOfGraduation" name="yearOfGraduation"
                        value="{{ $alumni->yearOfGraduation }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="currentActivity" class="form-label">Kegiatan Saat Ini</label>
                    <input type="text" class="form-control" id="currentActivity" name="currentActivity"
                        value="{{ $alumni->currentActivity }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{ $alumni->contact }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    @if ($alumni->image)
                        <img src="{{ asset('storage/' . $alumni->image) }}" alt="Foto Alumni" width="100" height="100">
                    @else
                        <p>No Photo</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="achievements" class="form-label">Penghargaan selama di Sekolah</label>
                    <select class="form-control" id="achievements" name="achievements[]" multiple disabled>
                        @if ($alumni->achievements->count() > 0)
                            @foreach ($alumni->achievements as $achievement)
                                <option value="{{ $achievement->id }}" selected>{{ $achievement->title }}</option>
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
