@extends('pages.admin.index')

@section('title', 'View Comment')

@section('content')
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $comment->name }}</p>
            <p><strong>Email:</strong> {{ $comment->email }}</p>
            <p><strong>Review:</strong> {{ $comment->review }}</p>
        </div>
    </div>
@endsection
