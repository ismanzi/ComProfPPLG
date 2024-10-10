@extends('pages.admin.index')

@section('title', 'Create Comment')

@section('content')
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $comment->name }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $comment->email }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="review" class="form-label">Review</label>
                        <textarea class="form-control" id="review" name="review" rows="4" disabled>{{ $comment->review }}</textarea>
                    </div>

                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                </form>
            </div>
    </form>
@endsection
